import { BakuganAttribute, BakuganSeason } from "@/types/generated";
import { srand } from "@/js/lib/mt19937";
import { shuffle } from "@/js/lib/shuffle";
import { Bakugan } from "@/types/Bakugan";
import { asSequence } from "sequency";
import swr from "swr-promise";
import { BakuganPartnerDriver } from "@/js/BakuganPartnerDriver";

// Note that this implementation is potentially different from
// the PHP one on the basis that the RNG systems used
// to determine the partner Bakugan is different
// in JS and PHP. This is due to JS having
// a very poor builtin RNG, and thus
// having to port one in.

const CALIBRATION_KEY = 503714; //NOTE: DO NOT TOUCH UNDER ANY CIRCUMSTANCES

// const allBakugan = async () => [] as Bakugan[];
const allBakugan = swr(async () => {
    const response = await fetch("/bakugan.json", {
        cache: "force-cache",
    });

    const data = (await response.json()) as Bakugan[];

    data.forEach((bakugan, index) => {
        if (typeof bakugan.id === "undefined") {
            bakugan.id = index;
        }
    });

    return data;
}, {
    maxAge: 120 * 60 * 1000, // 120 minutes
}) as () => Promise<Bakugan[]>;

const pickSeason = (birthday: Date): BakuganSeason => {
    const seasons = Object.values(BakuganSeason).filter(val => typeof val === "number");
    shuffle(seasons);
    const index = (birthday.getFullYear() + 1) % seasons.length;
    return seasons[index]! as BakuganSeason;
};

const pickAttribute = async (birthday: Date, season: BakuganSeason) => {
    const bakuganList = await allBakugan();
    const attributes = asSequence(bakuganList)
        .filter(b => b.season === season)
        .map(b => b.attribute)
        .distinct()
        .sorted()
        .toArray();

    shuffle(attributes);

    const index = (birthday.getMonth() + 1) % attributes.length;

    return attributes[index]!;
};

const pickPartner = async (birthday: Date, season: BakuganSeason, attribute: BakuganAttribute) => {
    const bakuganList = await allBakugan();
    const bakugans = asSequence(bakuganList)
        .filter(b => b.season === season)
        .filter(b => b.attribute === attribute)
        .sortedBy(b => b.name)
        .toArray();

    shuffle(bakugans);

    if (bakugans.length <= 2) {
        return bakugans[0]!;
    }

    const index = (birthday.getDate() + 1) % bakugans.length;
    return bakugans[index]!;
};

export const localDriver: BakuganPartnerDriver = async birthday => {
    const randomSeed = birthday.valueOf() + CALIBRATION_KEY;

    srand(randomSeed);

    const season = pickSeason(birthday);
    const attribute = await pickAttribute(birthday, season);
    return pickPartner(birthday, season, attribute);
};
