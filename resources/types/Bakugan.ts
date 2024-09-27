import type { BakuganAttribute, BakuganSeason } from "./generated";

export interface Bakugan {
    id?: number;
    attribute: BakuganAttribute;
    name: string;
    season: BakuganSeason;
    full_name: string;
    search_query: string;
    search_url: string;
}
