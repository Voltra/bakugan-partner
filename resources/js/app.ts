import "@/js/bootstrap";
import { parseDate } from "@/js/lib/date";
import { getBakuganPartnerDriver } from "@/js/drivers";
import { BakuganPartnerDriverType } from "@/js/BakuganPartnerDriver";
import { isMarvelBakugan } from "@/js/utils";

const driver = getBakuganPartnerDriver(BakuganPartnerDriverType.LOCAL);

document.addEventListener("DOMContentLoaded", () => {
    const state = {
        withoutMarvel: false,
    };

    const form = document.querySelector<HTMLFormElement>("#form")!;

    const dateInput = form.querySelector<HTMLInputElement>("input[type=date]")!;

    const resultBox = document.querySelector<HTMLElement>("#resultBox")!;
    const nameResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan")!;
    const linkResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan-url")!;
    const redoCheckbox = resultBox.querySelector<HTMLInputElement>("#redo-no-marvel")!;

    redoCheckbox.addEventListener("click", e => {
        e.preventDefault();

        state.withoutMarvel = redoCheckbox.checked;
        form.submit();
    });

    form.addEventListener("submit", e => {
        e.preventDefault();

        if (!form.reportValidity()) {
            return;
        }

        resultBox.classList.add("hidden");
        resultBox.classList.remove("flex");

        (async () => {
            const date = dateInput.value;
            const partner = await driver(parseDate(date), state);

            if (isMarvelBakugan(partner)) {
                redoCheckbox.parentElement!.classList.remove("hidden");
            } else {
                state.withoutMarvel = false;
                redoCheckbox.parentElement!.classList.add("hidden");
                redoCheckbox.checked = false;
            }

            nameResult.textContent = partner.full_name;
            linkResult.textContent = partner.search_query;
            linkResult.setAttribute("href", partner.search_url);

            resultBox.classList.remove("hidden");
            resultBox.classList.add("flex");

            resultBox.scrollIntoView(true);
        })();
    });
});
