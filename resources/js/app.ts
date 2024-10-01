import "@/js/bootstrap";
import { parseDate } from "@/js/lib/date";
import { getBakuganPartnerDriver } from "@/js/drivers";
import { BakuganPartnerDriverType } from "@/js/BakuganPartnerDriver";

const driver = getBakuganPartnerDriver(BakuganPartnerDriverType.LOCAL);

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector<HTMLFormElement>("#form")!;

    const dateInput = form.querySelector<HTMLInputElement>("input[type=date]")!;

    const resultBox = document.querySelector<HTMLElement>("#resultBox")!;
    const nameResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan")!;
    const linkResult = resultBox.querySelector<HTMLElement>("#guardian-bakugan-url")!;

    form.addEventListener("submit", e => {
        e.preventDefault();

        resultBox.classList.add("hidden");
        resultBox.classList.remove("flex");

        (async () => {
            const date = dateInput.value;
            const partner = await driver(parseDate(date));

            nameResult.textContent = partner.full_name;
            linkResult.textContent = partner.search_query;
            linkResult.setAttribute("href", partner.search_url);

            resultBox.classList.remove("hidden");
            resultBox.classList.add("flex");
        })();
    });
});
