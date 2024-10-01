import { nrand } from "./mt19937";

// export const shuffle = <T>(arr: T[]) => arr.sort(() => Math.round(3 * nrand() - 2));

export function shuffle<T>(array: T[]): void {
    let currentIndex = array.length;

    // While there remain elements to shuffle...
    while (currentIndex != 0) {

        // Pick a remaining element...
        let randomIndex = Math.floor(nrand() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex],
        ];
    }
}
