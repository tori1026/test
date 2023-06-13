// Q1
function calculateCircleArea(radius) {
  const PI = 3.14;
  return PI * radius * radius;
}

document.write("半径 5cm の円の面積: " + calculateCircleArea(5) + "cm²<br>");
document.write("半径 7cm の円の面積: " + calculateCircleArea(7) + "cm²<br>");
document.write("半径 10cm の円の面積: " + calculateCircleArea(10) + "cm²<br>");

// Q2
function calculateTotalAmount(adults, children) {
  const ADULT_PRICE = 500;
  const CHILD_PRICE = 200;
  return adults * ADULT_PRICE + children * CHILD_PRICE;
}

const groupA = { adults: 2, children: 4 };
const groupB = { adults: 1, children: 5 };
const groupC = { adults: 3, children: 7 };

document.write("A グループの合計金額: " + calculateTotalAmount(groupA.adults, groupA.children) + "円です。<br>");
document.write("B グループの合計金額: " + calculateTotalAmount(groupB.adults, groupB.children) + "円です。<br>");
document.write("C グループの合計金額: " + calculateTotalAmount(groupC.adults, groupC.children) + "円です。");
