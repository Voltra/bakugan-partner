import { formatDate, parse, startOfDay } from "date-fns";

// export const dateFormat = "Y-m-d";
export const dateFormat = "yyyy-MM-dd";

function convertTZ(date: Date | string, tzString: Intl.DateTimeFormatOptions["timeZone"]) {
    return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", { timeZone: tzString }));
}

export const parseDate = (date: string) => convertTZ(
    startOfDay(
        parse(date, dateFormat, new Date()),
    ),
    "Europe/Paris",
);

export const serializeDate = (date: Date) => formatDate(date, dateFormat);
