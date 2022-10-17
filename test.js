// Create function to convert given string to the output below

// Input
/* const optionRule = '{1069} AND ({1070} OR {1071} OR {1072}) AND {1244} AND ({1245} OR {1339})';
 */
// Output Example
/* const output = {
  and: [
    1069,
    { or: [1070, 1071, 1072] },
    1244,
    { or: [1245, 1339] },
  ]
}; */

/* let result = 'result'

console.log('result:', result); */

// Create function to convert given string to the output below

// Input
let stringdata =
  "{1069} AND ({1070} OR {1071} OR {1072}) AND {1244} AND ({1245} OR {1339})";

//function declaration
function SringConverter(strings) {
  let anddata = strings.split("AND");
  let ConvertedString = anddata.reduce(function (accumulator, currentValue) {
    let Ordata = currentValue.split("OR");

    if (Ordata.length > 1) {
      accumulator.push({
        or: `${Ordata}`
          .replace(/[\])}[{(]/g, "")
          .split(",")
          .map(Number),
      });
    } else {
      let anddat = currentValue
        .replace(/[\])}[{(]/g, "")
        .split(",")
        .map(Number);
      accumulator.push(anddat[0]);
    }
    return accumulator;
  }, []);
  return { and: ConvertedString };
}

// function calling

console.log(SringConverter(stringdata));

// Output Example
/* const output = {
  and: [
    1069,
    { or: [1070, 1071, 1072] },
    1244,
    { or: [1245, 1339] },
  ]
}; */
