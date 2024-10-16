import { Bakugan } from "@/types/Bakugan";

const marvelNames = [
    "captain america",
    "iron man",
    "red skull",
    "spider-man",
    "wolverine",
] as const;

export const isMarvelBakugan = (bakugan: Bakugan): boolean => {
    const bakuganName = bakugan.name.toLowerCase();

    return marvelNames.some(marvelName => bakuganName.includes(marvelName));
};
