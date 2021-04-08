<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" />

    <title>Showing {{$category}}</title>
</head>

<body class="bg-black">
    <div id="category">
        <div class="h-32 flex items-center justify-center w-full bg-black">
            <p class="font-bold text-4xl uppercase text-red-500">
                {{$category}}
            </p>
        </div>
        <div class="main-content my-8 h-screen">
            <div class="meals-container flex flex-col space-y-8 w-5/6 mx-auto hiddens">
                <div class="eggs grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
                    @foreach($meals as $meal)
                    <div class="meal-card rounded-lg hover:shadow-2xl cursor-pointer shadow-lg bg-white" data-sp-id="{{$meal->sp_id}}" data-meal-json='@json($meal)'>
                        <div class="image relative">
                            <img src="{{$meal->image}}" class="w-full rounded-t-lg" alt="">
                            <div class="absolute top-2 right-2 py-1 px-3 rounded-full bg-red-600 text-white text-xs">
                                {{ucfirst($meal->term)}}
                            </div>
                        </div>
                        <div class="desc p-3">
                            <p class="m-0 text-gray-900 font-bold text-lg">
                                {{$meal->title}}
                            </p>
                            <!-- <p class="text-gray-500 text-xs">
                            {{ucfirst($meal->term)}}
                        </p> -->
                        </div>
                        <!-- <div class="cta text-center mb-4">
                        <a href="#" class="rounded-full bg-red-500 text-white px-4 py-1 text-center">Open</a>
                    </div> -->
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="meal-container hidden bg-white w-full md:w-5/6 mx-auto flex flex-col h-5/6">
                <div class="meal-header flex items-center justify-between p-3 border border-gray-300 rounded-t-lg">
                    <p class="meal-title text-2xl font-bold uppercase">
                        Meal title
                    </p>
                    <!-- <button class="tester">Test</button> -->
                    <span class="close-meal text-4xl font-bold text-red-600 cursor-pointer">
                        <i class="mdi mdi-close"></i>
                    </span>
                </div>

                <div class="meal-bod flex flex-col space-y-4 p-5 h-5/6 overflow-y-scroll border border-gray-300 rounded-b-lg">
                    <div class="spinner-container flex flex-col space-y-1 items-center justify-center">
                    </div>
                    <div class="meal-body">

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="meal-summary-temp hidden">
        <p class="font-bold text-xl text-center">
            Summary
        </p>
        <p class="meal-summary text-gray-500 text-sm">
            Blue Cheese Burgers might be just the main course you are searching for. One portion of this dish contains roughly <b>45g of protein</b>, <b>37g of fat</b>, and a total of <b>661 calories</b>. For <b>$4.51 per serving</b>, this recipe <b>covers 28%</b> of your daily requirements of vitamins and minerals. This recipe serves 4. 7 people have tried and liked this recipe. This recipe is typical of American cuisine. It is brought to you by Foodista. If you have kosher salt, egg, ground pepper, and a few other ingredients on hand, you can make it. From preparation to the plate, this recipe takes about <b>about 45 minutes</b>. Overall, this recipe earns a <b>solid spoonacular score of 64%</b>. Similar recipes include <a href=\"https://spoonacular.com/recipes/blue-cheese-burgers-246009\">Blue Cheese Burgers</a>, <a href=\"https://spoonacular.com/recipes/blue-cheese-burgers-306034\">Blue Cheese Burgers</a>, and <a href=\"https://spoonacular.com/recipes/blue-cheese-burgers-218703\">Blue-Cheese Burgers</a>.
        </p>
    </div>
    <div class="meal-instructions-temp hidden my-3">
        <p class="font-bold text-2xl text-red-600 text-center">
            Instructions
        </p>
        <div class="meal-instructions">
        </div>
    </div>
    <div class="meal-instructions-step hidden my-3 text-gray-600">
        <p class="font-bold">STEP 1</p>
        <p class=" my-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ipsam rem tempora exercitationem voluptatum quasi, voluptate iusto assumenda error aspernatur inventore accusantium laudantium dignissimos cupiditate doloribus. Animi quisquam quo nam.
        </p>
    </div>
    <span class="meal-dish-temp hidden rounded-full mr-1 bg-gray-400 px-1 text-white text-xs font-bold">
        Breakfast
    </span>
    <div class="meal-meta-temp hidden flex items-center space-x-8">
        <div class="img w-1/6">
            <img src="https://spoonacular.com/recipeImages/1096073-312x231.jpg" class="meal-img h-32 w-32 object-cover rounded-full" alt="">
        </div>
        <div class="details w-5/6">

            <div class="text-gray-500 meal-duration flex items-center space-x-4">
                <div class="title">
                    <p>
                        <i class="mdi mdi-clock"></i> Ready in:
                    </p>
                </div>
                <div class="content">
                    <span class="ready-in-minutes text-red-600">
                        45 minutes
                    </span>
                </div>
            </div>

            <div class="text-gray-500 meal-servings flex items-center space-x-4">
                <div class="title">
                    <p>
                        <i class="mdi mdi-noodles"></i> Servings:
                    </p>
                </div>
                <div class="content">
                    <span class="servings text-red-600">
                        4
                    </span>
                </div>
            </div>
            <div class="text-gray-500 meal-dishes flex items-center space-x-4">
                <div class="title">
                    <p>
                        <i class="mdi mdi-book"></i> Dishes:
                    </p>
                </div>
                <div class="content">
                </div>
            </div>
        </div>
    </div>

    <div class="modal">

        <div class="modal micromodal-slide" id="recipe-show-modal" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="modal__container p-3 w-full mx-2" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                    <header class="modal__header text-cha-primary">
                        <h2 class="modal__title" id="modal-1-title"></h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <main class="modal__content p-3" id="modal-1-content">
                        <div class="spinner-container flex flex-col space-y-1 items-center justify-center">

                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/datastore.js')}}"></script>
    <script>
        var main_content = $('.main-content')
        var meal_container = $('.meal-container')
        const mc = $('.meal-container')
        var meal_body = $('.meal-body')
        var meals_container = $('.meals-container')
        var spinner = (text, color) => {
            return `
                
    <svg
      class="h-8 w-8 animate-spin -ml-1 mr-3 ${color}"
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
    >
      <circle
        class="opacity-25"
        cx="12"
        cy="12"
        r="10"
        stroke="currentColor"
        stroke-width="4"
      ></circle>
      <path
        class="opacity-75"
        fill="currentColor"
        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
      ></path>
    </svg>
    <p class="text-xs opacity-80 ${color}"> ${text}</p>
  
  `
        }

        function c(log) {
            console.log(log)
        }


        // async function complexSearch(term) {
        //     await $.get(spn_url + '/recipes/complexSearch' + spn_key + "&query=" + term).done(function(res) {
        //         c(res)
        //         return res
        //     })
        // }


        $('.meal-card').click(function() {
            const meal_data = JSON.parse($(this).attr('data-meal-json'))
            displayRecipe(meal_data)
        })

        $('.close-meal').click(function() {
            meal_container.addClass('hidden')
            meals_container.removeClass('hidden')
            resetMeal()
        })

        function resetMeal() {
            meal_body.html('');
        }

        function makeMealDishes(dish) {
            const meal_dish = $('.meal-dish-temp').clone()
            meal_dish.text(dish)
            meal_dish.removeClass('hidden');
            return meal_dish[0]
        }

        function makeMealMeta(meal) {
            const meal_meta = $('.meal-meta-temp').clone()
            meal_meta.find('.ready-in-minutes').text(meal.ready + ' minutes')
            meal_meta.find('.meal-img').attr('src', meal.image)
            meal_meta.find('.servings').text(meal.servings)
            meal_meta.removeClass('hidden');
            meal_body.append(meal_meta);
        }

        function makeMealSummary(summary) {
            const meal_summary = $('.meal-summary-temp').clone()
            meal_summary.find('.meal-summary').html(summary)
            meal_summary.removeClass('hidden');
            meal_body.append(meal_summary);
        }

        function makeAnalyzedInstructions(instructions) {
            c('ana')
            const meal_instructions = $('.meal-instructions-temp').clone()
            var meal_instructions_step = $('.meal-instructions-step').clone()[0]
            // meal_instructions.find('.meal-instructions')
            // .html(nl2br(instructions))
            instructions.forEach((i)=>{
                meal_instructions.append($('.meal-instructions-step').clone().removeClass('meal-instructions-step').removeClass('hidden').text(i.step));
            })
            meal_instructions.removeClass('hidden');
            meal_body.append(meal_instructions);

        }

        function makeInstructions(instructions) {
            const meal_instructions = $('.meal-instructions-temp').clone()
            var meal_instructions_step = $('.meal-instructions-step').clone()[0]
            meal_instructions.find('.meal-instructions').html(nl2br(instructions))
            meal_instructions.removeClass('hidden');
            meal_body.append(meal_instructions);

        }

        function displayRecipe(meal) {
            meals_container.addClass('hidden')
            meal_container.find('.meal-title').text(meal.title)
            meal_container.find('.spinner-container').removeClass('hidden').html(spinner('Loading recipe...', 'text-red-600'))
            // setTimeout(() => {
            //     displayRecipeDetails(meal_data)
            // }, 500)
            $.get(`${spn_url}/recipes/${meal.sp_id}/information${spn_key}`).done((data) => {
                c(data)
                displayRecipeDetails(data)
            }).fail(()=>{
                displayRecipeDetails(meal_data)
            }
            )
            meal_container.removeClass('hidden')
        }

        function displayRecipeDetails(data) {
            meal_container.find('.spinner-container').addClass('hidden')
            makeMealMeta({
                servings: data.servings,
                ready: data.readyInMinutes,
                dishes: data.dishTypes,
                image: data.image
            })
            const dish_content = $('.meal-dishes').find('.content')
            dish_content.html('')
            const meal_dish = $('.meal-dish').clone()
            data.dishTypes.forEach((d) => {
                var new_dish = makeMealDishes(d)
                dish_content.append(new_dish)
            })
            makeMealSummary(data.summary)
                // makeInstructions(data.instructions)
            if(data.analyzedInstructions.length>0){
                makeAnalyzedInstructions(data.analyzedInstructions[0].steps)
            }else{
                makeInstructions(data.instructions)
            }

        }

        $('.tester').click(function() {
            makeInstructions(meal_data.analyzedInstructions[0].steps)
        })

        function nl2br(str, is_xhtml) {
            if (typeof str === 'undefined' || str === null) {
                return '';
            }
            var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
            return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
        }
    </script>
</body>

</html>