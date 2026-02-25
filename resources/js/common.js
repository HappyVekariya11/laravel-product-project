document.addEventListener("alpine:init", () => {
  Alpine.data("date", (options) => ({
    init() {
      /** https://flatpickr.js.org/ */
      flatpickr(this.$el, {
        altInput: false,
        ...options
      });
    },
  }));
})