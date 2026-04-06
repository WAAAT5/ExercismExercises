export const COLOURS = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"]
export const PREFIXES = ["kilo", "mega", "giga", "tera", "peta", "exa", "zetta", "yotta"]

export function decodedResistorValue(colors: string[]): string {
  const ohms = (COLOURS.indexOf(colors[0]) * 10 + COLOURS.indexOf(colors[1])) * Math.pow(10, COLOURS.indexOf(colors[2]));
  for (let i = PREFIXES.length - 1; i >= 0; i--) {
    if (ohms >= Math.pow(10, (i + 1) * 3)) {
      //console.log(PREFIXES[i], colors, ohms)
      //console.log(`${ohms / Math.pow(10, (i + 1) * 3)} ${PREFIXES[i]}ohms`)
      return `${ohms / Math.pow(10, (i + 1) * 3)} ${PREFIXES[i]}ohms`;
    }
  }
  return `${ohms} ohms`;
}
