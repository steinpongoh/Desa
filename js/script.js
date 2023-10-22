var swiper = new Swiper(".slide-content", {
  slidesPerView: 1,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 1,
    },
    950: {
      slidesPerView: 1,
    },
  },
});

$(document).ready(function () {
  $("#hapusModal").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var id = button.data("id");

    $("#hapusButton").data("id", id);
  });

  $("#hapusButton").on("click", function () {
    var id = $(this).data("id");

    // Di sini, Anda dapat membuat permintaan AJAX untuk menghapus item dengan ID yang sesuai.
    // Misalnya:
    // $.ajax({
    //   url: 'hapusUser.php?id=' + id,
    //   method: 'POST',
    //   success: function (data) {
    //     // Tindakan setelah penghapusan selesai
    //   }
    // });

    // Tutup modal setelah penghapusan selesai
    $("#hapusModal").modal("hide");
  });
});
