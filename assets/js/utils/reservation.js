export function updateEndDate() {
  const startDate = $("input.start_date")
    .data("DateTimePicker")
    ?.date()
    .toDate();

  $("input.end_date").val(moment(startDate).format("DD/MM/YYYY 18:30"));
}
