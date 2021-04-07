<template>
  <div class="lander w-full flex flex-col items-center mt-20 space-y-4">
    <div
      class="hero flex flex-col md:flex-row justify-between items-center w-5/6 space-x-8 mx-auto"
    >
      <div class="w-full md:w-1/2">
        <p class="font-black text-white text-4xl md:text-6xl">
          Need quick
          <span class="text-red-600"> recipe? </span>
        </p>
        <div class="border-l-4 px-2 border-red-600 my-6">
          <p class="text-gray-100 text-sm">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde,
            velit. Ipsum natus, necessitatibus aperiam sunt et neque eveniet
            corrupti pariatur repudiandae corporis, explicabo iste debitis
            beatae.
          </p>
        </div>
      </div>
      <div class="hidden md:w-1/2 md:flex flex-col items-center space-y-4">
        <img src="img/food.png" class="h-64" alt="" />
        <div class="caption text-center">
          <p class="font-bold text-red-600 text-2xl">Pizza Casserole</p>
          <p class="text-white text-sm">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          </p>
        </div>
      </div>
    </div>
    <div class="modal micromodal-slide" id="food-modal" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div
          class="modal__container p-3 w-full mx-2"
          role="dialog"
          aria-modal="true"
          aria-labelledby="modal-1-title"
        >
          <header class="modal__header text-cha-primary">
            <h2 class="modal__title" id="modal-1-title"></h2>
            <button
              class="modal__close"
              aria-label="Close modal"
              data-micromodal-close
            ></button>
          </header>
          <main class="modal__content p-3" id="modal-1-content">
            <Spinner v-if="is_loading" />
      <div class="foods flex space-x-4 text-red-500">
        <div
          class="p-2 rounded shadow-lg"
          v-for="food in breakfast"
          :key="food.id"
        >
          <img :src="food.image" style="h-20 w-20 object-cover" alt="" />
          <p class="font-bold text-gray-600">{{ food.title }}</p>
        </div>
      </div>
          </main>
        </div>
      </div>
    </div>

    <!-- <div class="search w-2/3 mx-auto">
                <input type="text" class="rounded-full w-full">
            </div> -->
    <div class="w-2/3 mx-auto flex flex-col items-center justify-center">
      <p class="border-b-4 border-red-600 py-2 font-bold text-4xl my-6">
        Select a category
      </p>
      <div
        class="grid grid-cols-2 gap-8 md:w-full md:flex md:items-center md:justify-between"
      >
        <Period
          v-for="period in periods"
          :key="period.name"
          :period="period"
          @periodClicked="setModal"
        />
      </div>
    </div>
  </div>
</template>

<script>
import Period from "../components/Period";
import Spinner from "../components/Spinner";
import food from "../static/food.json"
export default {
  data() {
    return {
      periods: food.periods,
      is_loading: false,
      breakfast:food.breakfast,
      lunch:food.lunch
    };
  },
  mounted() {
    console.log("Component mounted.");
    console.log(food)

    // this.$modal.show("foodModal");
    MicroModal.show("food-modal");
  },
  methods: {
    setModal(period) {
      this.is_loading = true;
      this.$modal.show("foodModal");
      setTimeout(() => {
        this.is_loading = false;
        this.breakfast = food.found;
      }, 3000);

      console.log(period);
    },
  },
  components: {
    Period,
    Spinner,
  },
};
</script>
