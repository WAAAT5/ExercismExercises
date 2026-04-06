export const COLOURS = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"]

export function decodedValue(colors: string[]): number {
  return COLOURS.indexOf(colors[0]) * 10 + COLOURS.indexOf(colors[1]);
}
