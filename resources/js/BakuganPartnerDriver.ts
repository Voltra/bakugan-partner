import type { Bakugan } from "@/types/Bakugan";

export enum BakuganPartnerDriverType {
    LOCAL = "local",
    API = "api",
}

export type BakuganPartnerDriver = (birthday: Date) => Promise<Bakugan>;
