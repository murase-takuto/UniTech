<?php

namespace Database\Factories;

use App\Consts\ReviewStatusConsts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 200),
            'reviewer_id' => $this->faker->numberBetween(1, 20),
            'status' => $this->faker->randomElement([
                ReviewStatusConsts::PASSED,
                ReviewStatusConsts::REJECTED,
                ReviewStatusConsts::REVIEWING,
            ]),
            'url' => $this->faker->url(),
            'file_first' => '
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
            ',
            'file_second' => '
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
            ',
            'file_third' => '
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
                <p class="mb-5">
                    Trust fund seitan chia, wolf lomo letterpress Bushwick before
                    they sold out. Carles kogi fixie, squid twee Tonx readymade
                    cred typewriter scenester locavore kale chips vegan organic.
                    Meggings pug wolf Shoreditch typewriter skateboard.
                    McSweeney\'s iPhone chillwave, food truck direct trade disrupt
                    flannel irony tousled Cosby sweater single-origin coffee.
                    Organic disrupt bicycle rights, tattooed messenger bag flannel
                    craft beer fashion axe bitters. Readymade sartorial craft
                    beer, quinoa sustainable butcher Marfa Echo Park Terry
                    Richardson gluten-free flannel retro cred mlkshk banjo. Salvia
                    90\'s art party Blue Bottle, PBR&B cardigan 8-bit.
                </p>
                <p class="mb-5">
                    Meggings irony fashion axe, tattooed master cleanse Blue
                    Bottle stumptown bitters authentic flannel freegan paleo
                    letterpress ugh sriracha. Wolf PBR&B art party aesthetic meh
                    cliche. Sartorial before they sold out deep v, aesthetic PBR&B
                    craft beer post-ironic synth keytar pork belly skateboard
                    pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd
                    Future viral master cleanse skateboard banjo. Pitchfork
                    scenester cornhole, whatever try-hard ethnic banjo +1
                    gastropub American Apparel vinyl skateboard Shoreditch seitan.
                    Blue Bottle keffiyeh Austin Helvetica art party. Portland
                    ethnic fixie, beard retro direct trade ugh scenester Tumblr
                    readymade authentic plaid pickled hashtag biodiesel.
                </p>
            ',
            'submit_comment' => $this->faker->sentence(),
            'review_comment' => $this->faker->sentence(),
            'reviewed_at' => now(),
        ];
    }
}
