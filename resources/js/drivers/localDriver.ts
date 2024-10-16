import { BakuganAttribute, BakuganSeason } from "@/types/generated";
import { srand } from "@/js/lib/mt19937";
import { shuffle } from "@/js/lib/shuffle";
import { Bakugan } from "@/types/Bakugan";
import { asSequence } from "sequency";
import swr from "swr-promise";
import { BakuganPartnerDriver, BakuganPartnerDriverSettings } from "@/js/BakuganPartnerDriver";

// Note that this implementation is potentially different from
// the PHP one on the basis that the RNG systems used
// to determine the partner Bakugan is different
// in JS and PHP. This is due to JS having
// a very poor builtin RNG, and thus
// having to port one in.

const CALIBRATION_KEY = 503714; //NOTE: DO NOT TOUCH UNDER ANY CIRCUMSTANCES

const allBakugan = swr(async () => {
    // @ts-expect-error document.location is a valid argument to URL
    const response = await fetch(new URL("bakugan.json", document.location), {
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

const pickSeason = (birthday: Date, settings: BakuganPartnerDriverSettings): BakuganSeason => {
    const seasons = asSequence(Object.values(BakuganSeason))
        .filter((val): val is BakuganSeason => typeof val === "number")
        .map(season => season as BakuganSeason)
        .filterNot(season => season === BakuganSeason.BATTLE_BRAWLERS && settings.noBattleBrawlers)
        .filterNot(season => season === BakuganSeason.NEW_VESTROIA && settings.noNewVestroia)
        .filterNot(season => season === BakuganSeason.GUNDALIAN_INVADERS && settings.noGundalianInvaders)
        .filterNot(season => season === BakuganSeason.MECHTANIUM_SURGE && settings.noMechtaniumSurge)
        .filterNot(season => season === BakuganSeason.BAKUTECH && settings.noBakuTech)
        .toArray();

    shuffle(seasons);

    const index = (birthday.getFullYear() + 1) % seasons.length;
    return seasons[index]!;
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
    const matchingBakuganList = asSequence(bakuganList)
        .filter(b => b.season === season)
        .filter(b => b.attribute === attribute)
        .sortedBy(b => b.name)
        .toArray();

    shuffle(matchingBakuganList);

    if (matchingBakuganList.length <= 2) {
        return matchingBakuganList[0]!;
    }

    const index = (birthday.getDate() + 1) % matchingBakuganList.length;
    return matchingBakuganList[index]!;
};

export const localDriver: BakuganPartnerDriver = async (birthday, settings) => {
    const randomSeed = birthday.valueOf() + CALIBRATION_KEY + (settings?.withoutMarvel ? 404 : 0);

    srand(randomSeed);

    const season = pickSeason(birthday, settings);
    const attribute = await pickAttribute(birthday, season);
    return pickPartner(birthday, season, attribute);
};
