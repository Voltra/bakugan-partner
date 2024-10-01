import { formatDate, parse, startOfDay } from "date-fns";

// export const dateFormat = "Y-m-d";
export const dateFormat = "yyyy-MM-dd";

export const parseDate = (date: string) => startOfDay(parse(date, dateFormat, new Date()));

export const serializeDate = (date: Date) => formatDate(date, dateFormat);
