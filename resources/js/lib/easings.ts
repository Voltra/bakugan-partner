export type EasingFunction = (currentTime: number, startValue: number, diffValue: number, duration: number) => number;

/* eslint-disable no-return-assign, no-cond-assign, no-param-reassign, no-plusplus */

export const easeOutQuad: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        -diffValue * (currentTime /= duration) * (currentTime - 2) + startValue
    );
};

export const easeInQuad: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return diffValue * (currentTime /= duration) * currentTime + startValue;
};

export const easeInOutQuad: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    if ((currentTime /= duration / 2) < 1) {
        return (diffValue / 2) * currentTime * currentTime + startValue;
    }
    return (
        (-diffValue / 2) * (--currentTime * (currentTime - 2) - 1) + startValue
    );
};

export const easeInCubic: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue * (currentTime /= duration) * currentTime * currentTime +
        startValue
    );
};

export const easeOutCubic: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue *
        ((currentTime = currentTime / duration - 1) *
            currentTime *
            currentTime +
            1) +
        startValue
    );
};

export const easeInOutCubic: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    if ((currentTime /= duration / 2) < 1) {
        return (
            (diffValue / 2) * currentTime * currentTime * currentTime +
            startValue
        );
    }
    return (
        (diffValue / 2) * ((currentTime -= 2) * currentTime * currentTime + 2) +
        startValue
    );
};

export const easeInQuart: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue *
        (currentTime /= duration) *
        currentTime *
        currentTime *
        currentTime +
        startValue
    );
};

export const easeOutQuart: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        -diffValue *
        ((currentTime = currentTime / duration - 1) *
            currentTime *
            currentTime *
            currentTime -
            1) +
        startValue
    );
};

export const easeInOutQuart: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    if ((currentTime /= duration / 2) < 1) {
        return (
            (diffValue / 2) *
            currentTime *
            currentTime *
            currentTime *
            currentTime +
            startValue
        );
    }
    return (
        (-diffValue / 2) *
        ((currentTime -= 2) * currentTime * currentTime * currentTime - 2) +
        startValue
    );
};

export const easeInQuint: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue *
        (currentTime /= duration) *
        currentTime *
        currentTime *
        currentTime *
        currentTime +
        startValue
    );
};

export const easeOutQuint: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue *
        ((currentTime = currentTime / duration - 1) *
            currentTime *
            currentTime *
            currentTime *
            currentTime +
            1) +
        startValue
    );
};

export const easeInOutQuint: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    if ((currentTime /= duration / 2) < 1) {
        return (
            (diffValue / 2) *
            currentTime *
            currentTime *
            currentTime *
            currentTime *
            currentTime +
            startValue
        );
    }
    return (
        (diffValue / 2) *
        ((currentTime -= 2) *
            currentTime *
            currentTime *
            currentTime *
            currentTime +
            2) +
        startValue
    );
};

export const easeInSine: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        -diffValue * Math.cos((currentTime / duration) * (Math.PI / 2)) +
        diffValue +
        startValue
    );
};

export const easeOutSine: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue * Math.sin((currentTime / duration) * (Math.PI / 2)) +
        startValue
    );
};

export const easeInOutSine: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        (-diffValue / 2) * (Math.cos((Math.PI * currentTime) / duration) - 1) +
        startValue
    );
};

export const easeInExpo: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return currentTime === 0
        ? startValue
        : diffValue * 2 ** (10 * (currentTime / duration - 1)) + startValue;
};

export const easeOutExpo: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return currentTime === duration
        ? startValue + diffValue
        : diffValue * (-(2 ** ((-10 * currentTime) / duration)) + 1) +
        startValue;
};

export const easeInOutExpo: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    if (currentTime === 0) {
        return startValue;
    }
    if (currentTime === duration) {
        return startValue + diffValue;
    }
    if ((currentTime /= duration / 2) < 1) {
        return (diffValue / 2) * 2 ** (10 * (currentTime - 1)) + startValue;
    }
    return (diffValue / 2) * (-(2 ** (-10 * --currentTime)) + 2) + startValue;
};

export const easeInCirc: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        -diffValue *
        (Math.sqrt(1 - (currentTime /= duration) * currentTime) - 1) +
        startValue
    );
};

export const easeOutCirc: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue *
        Math.sqrt(
            1 - (currentTime = currentTime / duration - 1) * currentTime,
        ) +
        startValue
    );
};

export const easeInOutCirc: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    if ((currentTime /= duration / 2) < 1) {
        return (
            (-diffValue / 2) * (Math.sqrt(1 - currentTime * currentTime) - 1) +
            startValue
        );
    }
    return (
        (diffValue / 2) *
        (Math.sqrt(1 - (currentTime -= 2) * currentTime) + 1) +
        startValue
    );
};

export const easeInElastic: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    let s = 1.70158;
    let p = 0;
    let a = diffValue;
    if (currentTime === 0) {
        return startValue;
    }
    if ((currentTime /= duration) === 1) {
        return startValue + diffValue;
    }
    if (!p) {
        p = duration * 0.3;
    }
    if (a < Math.abs(diffValue)) {
        a = diffValue;
        s = p / 4;
    } else {
        s = (p / (2 * Math.PI)) * Math.asin(diffValue / a);
    }
    return (
        -(
            a *
            2 ** (10 * (currentTime -= 1)) *
            Math.sin(((currentTime * duration - s) * (2 * Math.PI)) / p)
        ) + startValue
    );
};

export const easeOutElastic: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    let s = 1.70158;
    let p = 0;
    let a = diffValue;
    if (currentTime === 0) {
        return startValue;
    }
    if ((currentTime /= duration) === 1) {
        return startValue + diffValue;
    }
    if (!p) {
        p = duration * 0.3;
    }
    if (a < Math.abs(diffValue)) {
        a = diffValue;
        s = p / 4;
    } else {
        s = (p / (2 * Math.PI)) * Math.asin(diffValue / a);
    }
    return (
        a *
        2 ** (-10 * currentTime) *
        Math.sin(((currentTime * duration - s) * (2 * Math.PI)) / p) +
        diffValue +
        startValue
    );
};

export const easeInOutElastic: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    let s = 1.70158;
    let p = 0;
    let a = diffValue;
    if (currentTime === 0) {
        return startValue;
    }
    if ((currentTime /= duration / 2) === 2) {
        return startValue + diffValue;
    }
    if (!p) {
        p = duration * (0.3 * 1.5);
    }
    if (a < Math.abs(diffValue)) {
        a = diffValue;
        s = p / 4;
    } else {
        s = (p / (2 * Math.PI)) * Math.asin(diffValue / a);
    }
    if (currentTime < 1) {
        return (
            -0.5 *
            (a *
                2 ** (10 * (currentTime -= 1)) *
                Math.sin(
                    ((currentTime * duration - s) * (2 * Math.PI)) / p,
                )) +
            startValue
        );
    }
    return (
        a *
        2 ** (-10 * (currentTime -= 1)) *
        Math.sin(((currentTime * duration - s) * (2 * Math.PI)) / p) *
        0.5 +
        diffValue +
        startValue
    );
};

export const easeInBack: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
    s = 1.70158,
) => {
    return (
        diffValue *
        (currentTime /= duration) *
        currentTime *
        ((s + 1) * currentTime - s) +
        startValue
    );
};

export const easeOutBack: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
    s = 1.70158,
) => {
    return (
        diffValue *
        ((currentTime = currentTime / duration - 1) *
            currentTime *
            ((s + 1) * currentTime + s) +
            1) +
        startValue
    );
};

export const easeInOutBack: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
    s = 1.70158,
) => {
    if ((currentTime /= duration / 2) < 1) {
        return (
            (diffValue / 2) *
            (currentTime *
                currentTime *
                (((s *= 1.525) + 1) * currentTime - s)) +
            startValue
        );
    }
    return (
        (diffValue / 2) *
        ((currentTime -= 2) *
            currentTime *
            (((s *= 1.525) + 1) * currentTime + s) +
            2) +
        startValue
    );
};

export const easeOutBounce: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    if ((currentTime /= duration) < 1 / 2.75) {
        return diffValue * (7.5625 * currentTime * currentTime) + startValue;
    }
    if (currentTime < 2 / 2.75) {
        return (
            diffValue *
            (7.5625 * (currentTime -= 1.5 / 2.75) * currentTime + 0.75) +
            startValue
        );
    }
    if (currentTime < 2.5 / 2.75) {
        return (
            diffValue *
            (7.5625 * (currentTime -= 2.25 / 2.75) * currentTime + 0.9375) +
            startValue
        );
    }
    return (
        diffValue *
        (7.5625 * (currentTime -= 2.625 / 2.75) * currentTime + 0.984375) +
        startValue
    );
};

export const easeInBounce: EasingFunction = (currentTime, startValue, diffValue, duration) => {
    return (
        diffValue -
        easeOutBounce(duration - currentTime, 0, diffValue, duration) +
        startValue
    );
};

export const easeInOutBounce: EasingFunction = (
    currentTime,
    startValue,
    diffValue,
    duration,
) => {
    if (currentTime < duration / 2) {
        return (
            easeInBounce(currentTime * 2, 0, diffValue, duration) * 0.5 +
            startValue
        );
    }
    return (
        easeOutBounce(currentTime * 2 - duration, 0, diffValue, duration) *
        0.5 +
        diffValue * 0.5 +
        startValue
    );
};

/* eslint-enable no-return-assign, no-cond-assign, no-restricted-properties, no-param-reassign, no-plusplus */
