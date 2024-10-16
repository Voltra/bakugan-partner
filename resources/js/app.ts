import { parseDate } from "@/js/lib/date";
import { getBakuganPartnerDriver } from "@/js/drivers";
import { BakuganPartnerDriverSettings, BakuganPartnerDriverType } from "@/js/BakuganPartnerDriver";
import { isMarvelBakugan } from "@/js/utils";
import { slideDown } from "@/js/lib/slideUpDown";
import { Accordion } from "@/js/Accordion";
import { asSequence } from "sequency";

const serializeSettings = (settings: BakuganPartnerDriverSettings): string => {
    return asSequence<[key: keyof BakuganPartnerDriverSettings, value: BakuganPartnerDriverSettings[keyof BakuganPartnerDriverSettings]]>(
        // @ts-expect-error not assignable type due to Object.entries poor typing
        Object.entries(settings),
    )
        .filter(([, value]) => value)
        .map(([key]) => key)
        .mapNotNull(key => {
            switch (key) {
                case "withoutMarvel":
                    return "No \"Marvel\" Bakugan";
                case "noBattleBrawlers":
                    return "No \"Battle Brawlers\" Bakugan";
                case "noNewVestroia":
                    return "No \"New Vestroia\" Bakugan";
                case "noGundalianInvaders":
                    return "No \"Gundalian Invaders\" Bakugan";
                case "noMechtaniumSurge":
                    return "No \"Mechtanium Surge\" Bakugan";
                case "noBakuTech":
                    return "No \"BakuTech\" Bakugan";
                default:
                    return null;
            }
        }).joinToString({
            separator: ",\n",
        });
};

const driver = getBakuganPartnerDriver(BakuganPartnerDriverType.LOCAL);

document.addEventListener("DOMContentLoaded", () => {
    const settings = {
        withoutMarvel: false,
        noBattleBrawlers: false,
        noNewVestroia: false,
        noGundalianInvaders: false,
        noMechtaniumSurge: false,
        noBakuTech: false,
    } satisfies BakuganPartnerDriverSettings as BakuganPartnerDriverSettings;

    const form = document.querySelector<HTMLFormElement>("#form")!;

    const dateInput = form.querySelector<HTMLInputElement>("input[type=date]")!;

    const options = form.querySelector<HTMLElement>("#options-section")!;
    const optionsAccordion = new Accordion(options);
    optionsAccordion.setup();

    const resultBox = document.querySelector<HTMLElement>("#resultBox")!;
    const filtersResult = resultBox.querySelector<HTMLElement>("#filters-display")!;
    const nameResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan")!;
    const linkResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan-url")!;
    const redoCheckbox = resultBox.querySelector<HTMLInputElement>("#redo-no-marvel")!;

    const noBB = options.querySelector<HTMLInputElement>("#no-bb");
    const noNV = options.querySelector<HTMLInputElement>("#no-nv");
    const noGI = options.querySelector<HTMLInputElement>("#no-gi");
    const noMS = options.querySelector<HTMLInputElement>("#no-ms");
    const noBT = options.querySelector<HTMLInputElement>("#no-bt");

    asSequence([
        noBB,
        noNV,
        noGI,
        noMS,
        noBT,
    ])
        .filterNotNull()
        .forEach(checkbox => {
            checkbox.addEventListener("click", () => {
                // Removes the custom validity error
                checkbox.setCustomValidity("");
                noBB?.setCustomValidity("");
            });
        });

    redoCheckbox.addEventListener("click", e => {
        e.preventDefault();

        settings.withoutMarvel = redoCheckbox.checked;
        form.submit();
    });

    form.addEventListener("submit", e => {
        e.preventDefault();

        if (!form.reportValidity()) {
            return;
        }

        const localState = {
            noBattleBrawlers: noBB?.checked ?? false,
            noNewVestroia: noNV?.checked ?? false,
            noGundalianInvaders: noGI?.checked ?? false,
            noMechtaniumSurge: noMS?.checked ?? false,
            noBakuTech: noBT?.checked ?? false,
        } satisfies Partial<BakuganPartnerDriverSettings>;

        const allChecked = asSequence(Object.values(localState))
            .all(checked => checked);

        if (allChecked) {
            console.log(localState);
            noBB?.setCustomValidity("You must leave at least one season unchecked");
            form.reportValidity();
            return;
        } else {
            // Removes the custom validity error
            noBB?.setCustomValidity("");
        }

        Object.assign(settings, localState);

        resultBox.classList.add("hidden");
        resultBox.classList.remove("flex");
        filtersResult.classList.add("hidden");
        filtersResult.innerText = "";

        (async () => {
            const date = dateInput.value;
            const partner = await driver(parseDate(date), settings);

            if (isMarvelBakugan(partner)) {
                redoCheckbox.parentElement!.classList.remove("hidden");
            } else {
                settings.withoutMarvel = false;
                redoCheckbox.parentElement!.classList.add("hidden");
                redoCheckbox.checked = false;
            }

            const serializedSettings = serializeSettings(settings);

            if (serializedSettings.length) {
                filtersResult.innerText = `Filters:\n${serializedSettings}`;
                filtersResult.classList.remove("hidden");
            }

            nameResult.textContent = partner.full_name;
            linkResult.textContent = partner.search_query;
            linkResult.setAttribute("href", partner.search_url);

            if (resultBox.classList.contains("hidden")) {
                slideDown(resultBox).then(() => {
                    resultBox.scrollIntoView({
                        block: "start",
                    });
                });
                resultBox.classList.remove("hidden");
                resultBox.classList.add("flex");
            } else {
                resultBox.scrollIntoView({
                    block: "start",
                });
            }
        })();
    });
});
