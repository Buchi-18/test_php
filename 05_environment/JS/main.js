
require("dotenv").config();
const value = process.env.TEST_VALUE;
console.log(value);


async function asyncCall() {
  console.log("calling");
  const url = `
  https://api.openweathermap.org/data/2.5/forecast?lat=57&lon=-2.15&appid=${API_KEY}&units=metric
  `
  const response = await fetch(url);
  const result = await response.json();

  console.log(result);
}

// asyncCall();


