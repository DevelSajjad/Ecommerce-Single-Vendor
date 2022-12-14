$(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("Your imaginary file is safe!");
        }
      });
  })

$(document).on("click", "#process", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once Confirm, you will not be able to Pending !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("This Order Still Pending!");
        }
      });
  })
$(document).on("click", "#confirm", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once Process, you will not be able to Confirm !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("This Order Still Confirm!");
        }
      });
  })

$(document).on("click", "#picked", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once Picked, you will not be able to Process !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("This Order Still Processing!");
        }
      });
  })
$(document).on("click", "#shipped", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once Shipped, you will not be able to Picked !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("This Order Still Picked!");
        }
      });
  })
$(document).on("click", "#deliver", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
        title: "Are you sure?",
        text: "Once Deliver, you will not be able to Shipped !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = link;
        } else {
          swal("This Order Still Shipping!");
        }
      });
  })