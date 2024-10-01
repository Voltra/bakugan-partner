import { BakuganPartnerDriverType } from "@/js/BakuganPartnerDriver";
import { localDriver } from "@/js/drivers/localDriver";
import { apiDriver } from "@/js/drivers/apiDriver";

export const getBakuganPartnerDriver = (driver: BakuganPartnerDriverType) => {
    switch (driver) {
        case BakuganPartnerDriverType.LOCAL:
            return localDriver;
        case BakuganPartnerDriverType.API:
            return apiDriver;
    }
};
