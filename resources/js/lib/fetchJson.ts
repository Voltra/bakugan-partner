import swr from "swr-promise"

const swrFetch = swr(fetch, {
    maxAge: Infinity,
}) as (input: RequestInfo|URL, init?: RequestInit) => Promise<Response>;

export const fetchJson = async <T>(uri: string, params: Record<string, any> = {}) => {
    const queryString = new URLSearchParams(params);
    const url = new URL(uri, document.location.origin);

    queryString.forEach((value, key) => {
        url.searchParams.append(key, value);
    });

    const response = await swrFetch(url, {
        cache: "force-cache",
        mode: "same-origin",
        credentials: "same-origin",
        priority: "low",
    });

    const data = await response.json();

    return data as unknown as T;
};
