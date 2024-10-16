import type { Bakugan } from "@/types/Bakugan";

export enum BakuganPartnerDriverType {
    LOCAL = "local",
    API = "api",
}

export interface BakuganPartnerDriverSettings {
    withoutMarvel: boolean;
    noBattleBrawlers: boolean;
    noNewVestroia: boolean;
    noGundalianInvaders: boolean;
    noMechtaniumSurge: boolean;
    noBakuTech: boolean;
}

export type BakuganPartnerDriver = (birthday: Date, settings: BakuganPartnerDriverSettings) => Promise<Bakugan>;
