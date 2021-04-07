const spn_url = "https://api.spoonacular.com/";
const spn_key = "?apiKey=85fc9da86b1d444aaeb3598f8200566e";
// const spn_key = recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&query=green tea

const meal_data = {
    vegetarian: false,
    vegan: false,
    glutenFree: false,
    dairyFree: false,
    veryHealthy: false,
    cheap: false,
    veryPopular: false,
    sustainable: false,
    weightWatcherSmartPoints: 20,
    gaps: "no",
    lowFodmap: false,
    aggregateLikes: 7,
    spoonacularScore: 65.0,
    healthScore: 17.0,
    creditsText: "Foodista.com – The Cooking Encyclopedia Everyone Can Edit",
    license: "CC BY 3.0",
    sourceName: "Foodista",
    pricePerServing: 450.87,
    extendedIngredients: [
        {
            id: 1082047,
            aisle: "Spices and Seasonings",
            image: "salt.jpg",
            consistency: "solid",
            name: "kosher salt",
            nameClean: "coarse kosher salt",
            original: "3/4 tsp kosher salt",
            originalString: "3/4 tsp kosher salt",
            originalName: "kosher salt",
            amount: 0.75,
            unit: "tsp",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 0.75,
                    unitShort: "tsps",
                    unitLong: "teaspoons"
                },
                metric: {
                    amount: 0.75,
                    unitShort: "tsps",
                    unitLong: "teaspoons"
                }
            }
        },
        {
            id: 10023567,
            aisle: "Meat",
            image: "fresh-ground-beef.jpg",
            consistency: "solid",
            name: "ground sirloin",
            nameClean: "ground sirloin",
            original: "1 pound(s) ground sirloin",
            originalString: "1 pound(s) ground sirloin",
            originalName: "pound(s) ground sirloin",
            amount: 1.0,
            unit: "pounds",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 1.0,
                    unitShort: "lb",
                    unitLong: "pound"
                },
                metric: {
                    amount: 453.592,
                    unitShort: "g",
                    unitLong: "grams"
                }
            }
        },
        {
            id: 10023567,
            aisle: "Meat",
            image: "fresh-ground-beef.jpg",
            consistency: "solid",
            name: "ground sirloin",
            nameClean: "ground sirloin",
            original: "1/2 pound ground Sirloin",
            originalString: "1/2 pound ground Sirloin",
            originalName: "ground Sirloin",
            amount: 0.5,
            unit: "pound",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 0.5,
                    unitShort: "lb",
                    unitLong: "pounds"
                },
                metric: {
                    amount: 226.796,
                    unitShort: "g",
                    unitLong: "grams"
                }
            }
        },
        {
            id: 18079,
            aisle: "Pasta and Rice",
            image: "breadcrumbs.jpg",
            consistency: "solid",
            name: "dry bread crumbs",
            nameClean: "breadcrumbs",
            original: "1/4 cup dry bread Crumbs",
            originalString: "1/4 cup dry bread Crumbs",
            originalName: "dry bread Crumbs",
            amount: 0.25,
            unit: "cup",
            meta: ["dry"],
            metaInformation: ["dry"],
            measures: {
                us: {
                    amount: 0.25,
                    unitShort: "cups",
                    unitLong: "cups"
                },
                metric: {
                    amount: 59.147,
                    unitShort: "ml",
                    unitLong: "milliliters"
                }
            }
        },
        {
            id: 27048,
            aisle: "Condiments",
            image: "dark-sauce.jpg",
            consistency: "liquid",
            name: "steak sauce",
            nameClean: "steak sauce",
            original: "1/2 cup steak sauce",
            originalString: "1/2 cup steak sauce",
            originalName: "steak sauce",
            amount: 0.5,
            unit: "cup",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 0.5,
                    unitShort: "cups",
                    unitLong: "cups"
                },
                metric: {
                    amount: 118.294,
                    unitShort: "ml",
                    unitLong: "milliliters"
                }
            }
        },
        {
            id: 1123,
            aisle: "Milk, Eggs, Other Dairy",
            image: "egg.png",
            consistency: "solid",
            name: "egg",
            nameClean: "egg",
            original: "1 large egg",
            originalString: "1 large egg",
            originalName: "egg",
            amount: 1.0,
            unit: "large",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 1.0,
                    unitShort: "large",
                    unitLong: "large"
                },
                metric: {
                    amount: 1.0,
                    unitShort: "large",
                    unitLong: "large"
                }
            }
        },
        {
            id: 1002030,
            aisle: "Spices and Seasonings",
            image: "pepper.jpg",
            consistency: "solid",
            name: "ground pepper",
            nameClean: "ground black pepper",
            original: "1/2 tsp ground black pepper",
            originalString: "1/2 tsp ground black pepper",
            originalName: "ground black pepper",
            amount: 0.5,
            unit: "tsp",
            meta: ["black"],
            metaInformation: ["black"],
            measures: {
                us: {
                    amount: 0.5,
                    unitShort: "tsps",
                    unitLong: "teaspoons"
                },
                metric: {
                    amount: 0.5,
                    unitShort: "tsps",
                    unitLong: "teaspoons"
                }
            }
        },
        {
            id: 18350,
            aisle: "Bakery/Bread",
            image: "hamburger-bun.jpg",
            consistency: "solid",
            name: "hamburger buns",
            nameClean: "hamburger bun",
            original: "4 hamburger buns",
            originalString: "4 hamburger buns",
            originalName: "hamburger buns",
            amount: 4.0,
            unit: "",
            meta: [],
            metaInformation: [],
            measures: {
                us: {
                    amount: 4.0,
                    unitShort: "",
                    unitLong: ""
                },
                metric: {
                    amount: 4.0,
                    unitShort: "",
                    unitLong: ""
                }
            }
        },
        {
            id: 1004,
            aisle: "Cheese",
            image: "blue-cheese.png",
            consistency: "solid",
            name: "blue cheese",
            nameClean: "blue cheese",
            original: "4 ounces sliced blue cheese",
            originalString: "4 ounces sliced blue cheese",
            originalName: "sliced blue cheese",
            amount: 4.0,
            unit: "ounces",
            meta: ["blue", "sliced"],
            metaInformation: ["blue", "sliced"],
            measures: {
                us: {
                    amount: 4.0,
                    unitShort: "oz",
                    unitLong: "ounces"
                },
                metric: {
                    amount: 113.398,
                    unitShort: "g",
                    unitLong: "grams"
                }
            }
        }
    ],
    id: 635350,
    title: "Blue Cheese Burgers",
    readyInMinutes: 453,
    servings: 42,
    sourceUrl: "https://www.foodista.com/recipe/ZVXPQHB5/blue-cheese-burgers",
    image: "https://spoonacular.com/recipeImages/635350-556x370.jpg",
    imageType: "jpg",
    summary:
        'Blue Cheese Burgers might be just the main course you are searching for. One portion of this dish contains roughly <b>45g of protein</b>, <b>37g of fat</b>, and a total of <b>661 calories</b>. For <b>$4.51 per serving</b>, this recipe <b>covers 28%</b> of your daily requirements of vitamins and minerals. This recipe serves 4. 7 people have tried and liked this recipe. This recipe is typical of American cuisine. It is brought to you by Foodista. If you have kosher salt, egg, ground pepper, and a few other ingredients on hand, you can make it. From preparation to the plate, this recipe takes about <b>about 45 minutes</b>. Overall, this recipe earns a <b>solid spoonacular score of 64%</b>. Similar recipes include <a href="https://spoonacular.com/recipes/blue-cheese-burgers-246009">Blue Cheese Burgers</a>, <a href="https://spoonacular.com/recipes/blue-cheese-burgers-306034">Blue Cheese Burgers</a>, and <a href="https://spoonacular.com/recipes/blue-cheese-burgers-218703">Blue-Cheese Burgers</a>.',
    cuisines: ["American"],
    dishTypes: ["lunch", "main course", "main dish", "dinner"],
    diets: [],
    occasions: [],
    winePairing: {
        pairedWines: ["malbec", "merlot", "zinfandel"],
        pairingText:
            "Malbec, Merlot, and Zinfandel are my top picks for Cheeseburger. Merlot will be perfectly adequate for a classic burger with standard toppings. Bolder toppings call for bolder wines, such as a malbec or peppery zinfandel. One wine you could try is Ernesto Catena Padrillos Malbec. It has 4.8 out of 5 stars and a bottle costs about 15 dollars.",
        productMatches: [
            {
                id: 438162,
                title: "Ernesto Catena Padrillos Malbec",
                description:
                    "Ripe, concentrated dark fruit aromas with hints of chocolate, black cherry and red currant fruit flavors with notes of sweet spices, soft, supple tannins and balanced bright acidity.",
                price: "$14.99",
                imageUrl:
                    "https://spoonacular.com/productImages/438162-312x231.jpg",
                averageRating: 0.96,
                ratingCount: 5.0,
                score: 0.8975,
                link:
                    "https://click.linksynergy.com/deeplink?id=*QCiIS6t4gA&mid=2025&murl=https%3A%2F%2Fwww.wine.com%2Fproduct%2Fernesto-catena-padrillos-malbec-2013%2F134759"
            }
        ]
    },
    instructions:
        "Step 1: In a bowl, add chuck, sirloin, bread crumbs, steak sauce, eggs, salt, and pepper, and mix gently with fork.\nStep 2: Form 4 patties out of this mixture.\nStep 3: Cook the hamburgers patties on each side, then cover with aluminium foil.\nStep 4: Cut the sides of the bun, then grill in a stove-top grill until toasted.\nStep 5: Place patties and a slice of blue cheese in each bun.\nStep 6: Serve hot.",
    analyzedInstructions: [
        {
            name: "",
            steps: [
                {
                    number: 1,
                    step:
                        "In a bowl, add chuck, sirloin, bread crumbs, steak sauce, eggs, salt, and pepper, and mix gently with fork.",
                    ingredients: [
                        {
                            id: 18079,
                            name: "breadcrumbs",
                            localizedName: "breadcrumbs",
                            image: "breadcrumbs.jpg"
                        },
                        {
                            id: 27048,
                            name: "steak sauce",
                            localizedName: "steak sauce",
                            image: "dark-sauce.jpg"
                        },
                        {
                            id: 23625,
                            name: "sirloin steak",
                            localizedName: "sirloin steak",
                            image: "sirloin-steak.png"
                        },
                        {
                            id: 1002030,
                            name: "pepper",
                            localizedName: "pepper",
                            image: "pepper.jpg"
                        },
                        {
                            id: 1123,
                            name: "egg",
                            localizedName: "egg",
                            image: "egg.png"
                        },
                        {
                            id: 2047,
                            name: "salt",
                            localizedName: "salt",
                            image: "salt.jpg"
                        }
                    ],
                    equipment: [
                        {
                            id: 404783,
                            name: "bowl",
                            localizedName: "bowl",
                            image: "bowl.jpg"
                        }
                    ]
                },
                {
                    number: 2,
                    step: "Form 4 patties out of this mixture.",
                    ingredients: [],
                    equipment: []
                },
                {
                    number: 3,
                    step:
                        "Cook the hamburgers patties on each side, then cover with aluminium foil.",
                    ingredients: [],
                    equipment: [
                        {
                            id: 404765,
                            name: "aluminum foil",
                            localizedName: "aluminum foil",
                            image: "aluminum-foil.png"
                        }
                    ]
                },
                {
                    number: 4,
                    step:
                        "Cut the sides of the bun, then grill in a stove-top grill until toasted.",
                    ingredients: [
                        {
                            id: 0,
                            name: "roll",
                            localizedName: "roll",
                            image: "dinner-yeast-rolls.jpg"
                        }
                    ],
                    equipment: [
                        {
                            id: 404794,
                            name: "stove",
                            localizedName: "stove",
                            image: "oven.jpg"
                        },
                        {
                            id: 404706,
                            name: "grill",
                            localizedName: "grill",
                            image: "grill.jpg"
                        }
                    ]
                },
                {
                    number: 5,
                    step:
                        "Place patties and a slice of blue cheese in each bun.",
                    ingredients: [
                        {
                            id: 1004,
                            name: "blue cheese",
                            localizedName: "blue cheese",
                            image: "blue-cheese.png"
                        },
                        {
                            id: 0,
                            name: "roll",
                            localizedName: "roll",
                            image: "dinner-yeast-rolls.jpg"
                        }
                    ],
                    equipment: []
                },
                {
                    number: 6,
                    step: "Serve hot.",
                    ingredients: [],
                    equipment: []
                }
            ]
        }
    ],
    originalId: null,
    spoonacularSourceUrl: "https://spoonacular.com/blue-cheese-burgers-635350"
};
