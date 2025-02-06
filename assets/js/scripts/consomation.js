window.updateConsomationTotal = () => {
  let total = 0;
  document.querySelectorAll(".consomation-sous-total").forEach((input) => {
    total += parseFloat(input.value) || 0;
  });
  document.getElementById("consomation_total").value = total.toFixed(2);
};
