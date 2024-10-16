import { slideDown, slideUp } from "@/js/lib/slideUpDown";

export class Accordion {
    private toggler: HTMLButtonElement;
    private content: HTMLElement;

    constructor(protected el: HTMLElement) {
        this.toggler = this.el.querySelector<HTMLButtonElement>("button[aria-expanded]")!;
        this.content = this.el.querySelector<HTMLElement>("[role='region']")!;

        this.toggle = this.toggle.bind(this);
    }

    isOpened() {
        return this.toggler.getAttribute("aria-expanded") === "true";
    }

    open() {
        if (this.isOpened()) {
            return Promise.resolve();
        }

        this.toggler.setAttribute("aria-expanded", "true");
        this.toggler.scrollIntoView({
            block: "start",
        });
        const promise = slideDown(this.content);
        this.content.classList.remove("hidden");
        return promise;
    }

    async close() {
        if (!this.isOpened()) {
            return Promise.resolve();
        }

        this.toggler.setAttribute("aria-expanded", "false");
        await slideUp(this.content);
        this.content.classList.add("hidden");
    }

    toggle() {
        return this.isOpened() ? this.close() : this.open();
    }

    setup() {
        this.toggler.addEventListener("click", this.toggle);
    }
}
