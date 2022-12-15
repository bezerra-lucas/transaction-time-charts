feather.replace();

$(function () {
  $('input[name="date"]').daterangepicker(
    {
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 2000,
      maxYear: parseInt(moment().format("YYYY"), 10),
    },
    function (start, end, label) {
      // var years = moment().diff(start, "years");
      // alert("You are " + years + " years old!");
    }
  );
});
