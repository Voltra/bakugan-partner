import { BakuganPartnerDriver } from "@/js/BakuganPartnerDriver";
import { serializeDate } from "@/js/lib/date";
import { fetchJson } from "@/js/lib/fetchJson";
import { Bakugan } from "@/types/Bakugan";

export const apiDriver: BakuganPartnerDriver = async birthday => {
    const birthdayDate = serializeDate(birthday);
    return fetchJson<Bakugan>("/api/bakugan-partner", {
        birthday: birthdayDate,
    });
};
