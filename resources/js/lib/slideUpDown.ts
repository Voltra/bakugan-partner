//cf. https://github.com/janrembold/es6-slide-up-down/blob/master/src/index.ts

import { easeOutQuad, EasingFunction } from "@/js/lib/easings";

export interface SlideOptions {
    duration: number,
    easing: EasingFunction,
    startingHeight: number,
    distanceHeight: number,
    startingPaddingTop: number,
    distancePaddingTop: number,
    startingPaddingBottom: number,
    distancePaddingBottom: number,
    direction?: number,
    to?: number,
    paddingTopTo?: number,
    paddingBottomTo?: number,
    startTime?: number,
}

export enum SlideDirection {
    OPEN = 1,
    CLOSE = 2,
}

const defaults = {
    duration: 400,
    easing: easeOutQuad,
    startingHeight: 0,
    distanceHeight: 0,
    startingPaddingTop: 0,
    distancePaddingTop: 0,
    startingPaddingBottom: 0,
    distancePaddingBottom: 0,
} satisfies SlideOptions as SlideOptions;

const isInteger = (value: unknown): value is number => {
    if (Number.isInteger) {
        return Number.isInteger(value);
    }
    return (
        typeof value === "number" &&
        isFinite(value) &&
        Math.floor(value) === value
    );
};

// eslint-disable-next-line no-shadow
const extend = <T>(defaults: T, options: Partial<T>): T => {
    const extendedOptions = {} as Partial<T>;
    // eslint-disable-next-line guard-for-in,no-restricted-syntax
    for (const key in defaults) {
        extendedOptions[key] = options[key] || defaults[key];
    }

    return extendedOptions as T;
};

const setElementAnimationStyles = (element: HTMLElement) => {
    element.style.display = "block";
    element.style.overflow = "hidden";
    element.style.marginTop = "0";
    element.style.marginBottom = "0";
    element.style.paddingTop = "0";
    element.style.paddingBottom = "0";
};

const removeElementAnimationStyles = (element: HTMLElement) => {
    // @ts-expect-error null not assignable despite it being correct
    element.style.height = null;

    // @ts-expect-error null not assignable despite it being correct
    element.style.overflow = null;

    // @ts-expect-error null not assignable despite it being correct
    element.style.marginTop = null;

    // @ts-expect-error null not assignable despite it being correct
    element.style.marginBottom = null;

    // @ts-expect-error null not assignable despite it being correct
    element.style.paddingTop = null;

    // @ts-expect-error null not assignable despite it being correct
    element.style.paddingBottom = null;
};

const animate = (element: HTMLElement, options: SlideOptions, now: number, callback: () => void = () => {
}) => {
    if (!options.startTime) {
        options.startTime = now;
    }

    const currentTime = now - options.startTime;
    const animationContinue = currentTime < options.duration;

    const newHeight = options.easing(
        currentTime,
        options.startingHeight,
        options.distanceHeight,
        options.duration,
    );

    const newPadTop = options.easing(
        currentTime,
        options.startingPaddingTop,
        options.distancePaddingTop,
        options.duration,
    );

    const newPadBottom = options.easing(
        currentTime,
        options.startingPaddingBottom,
        options.distancePaddingBottom,
        options.duration,
    );

    if (animationContinue) {
        // element.style.height = `${newHeight.toFixed(2)}px`;

        Object.assign(element.style, {
            height: `${newHeight.toFixed(2)}px`,
            paddingTop: `${newPadTop.toFixed(2)}px`,
            paddingBottom: `${newPadBottom.toFixed(2)}px`,
        });

        window.requestAnimationFrame(timestamp =>
            animate(element, options, timestamp, callback),
        );
    } else {
        if (options.direction === SlideDirection.CLOSE) {
            element.style.display = "none";
        }

        if (options.direction === SlideDirection.OPEN) {
            // @ts-expect-error null not assignable despite it being correct
            element.style.display = null;
        }

        removeElementAnimationStyles(element);
        callback();
    }
};

export const slideUp = (element: HTMLElement, args: number | Partial<SlideOptions> = {}) => {
    if (isInteger(args)) {
        args = { duration: args } satisfies Partial<SlideOptions>;
    }

    const styles = getComputedStyle(element);
    const padTop = parseFloat(styles.paddingTop.replace("px", ""));
    const padBot = parseFloat(styles.paddingBottom.replace("px", ""));

    const options = extend(defaults, args);
    options.direction = SlideDirection.CLOSE;
    options.to = 0;
    options.startingHeight = element.scrollHeight;
    options.distanceHeight = -options.startingHeight;

    options.paddingTopTo = 0;
    options.startingPaddingTop = padTop;
    options.distancePaddingTop = -options.startingPaddingTop;

    options.paddingBottomTo = 0;
    options.startingPaddingBottom = padBot;
    options.distancePaddingBottom = -options.startingPaddingBottom;

    setElementAnimationStyles(element);

    return new Promise<void>(resolve => {
        window.requestAnimationFrame(timestamp =>
            animate(element, options, timestamp, resolve),
        );
    });
};

export const slideDown = (element: HTMLElement, args: number | Partial<SlideOptions> = {}) => {
    if (isInteger(args)) {
        args = { duration: args };
    }

    element.style.height = "0px";
    const styles = getComputedStyle(element);
    const padTop = parseFloat(styles.paddingTop.replace("px", ""));
    const padBot = parseFloat(styles.paddingBottom.replace("px", ""));
    setElementAnimationStyles(element);

    const options = extend(defaults, args);
    options.direction = SlideDirection.OPEN;
    options.to = element.scrollHeight;
    options.startingHeight = 0;
    options.distanceHeight = options.to;

    options.paddingTopTo = padTop;
    options.startingPaddingTop = 0;
    options.distancePaddingTop = padTop;

    options.paddingBottomTo = padBot;
    options.startingPaddingBottom = 0;
    options.distancePaddingBottom = padBot;

    return new Promise<void>(resolve => {
        window.requestAnimationFrame(timestamp =>
            animate(element, options, timestamp, resolve),
        );
    });
};
