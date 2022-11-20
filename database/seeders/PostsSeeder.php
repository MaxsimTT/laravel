<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_post_id' => 3,
                'name'             => 'Lorem ipsum',
                'description'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisl lorem, efficitur ut efficitur in, suscipit a est. Sed nulla nunc, accumsan vel ex vel, lobortis facilisis est. Phasellus a ligula erat. Pellentesque ac diam lacus. Cras venenatis, massa a varius volutpat, felis est finibus orci, in sodales ante diam in nunc. Aenean varius dapibus cursus. Mauris dui dolor, mollis quis hendrerit quis, finibus quis nisi. Sed non justo enim. Nunc laoreet velit orci, non porta nibh tempus eu. Nullam luctus mollis lorem sit amet ultrices. In in volutpat ipsum. Etiam vestibulum metus eros, ut pellentesque turpis ornare eu. Nunc tincidunt nulla nunc. In hac habitasse platea dictumst. Quisque ut pretium sem.',
                'author_id'        => 2,
            ],
            [
                'category_post_id' => 4,
                'name'             => 'Suspendisse',
                'description'      => 'Suspendisse sed urna id nulla accumsan dignissim sed et nulla. Praesent ullamcorper convallis ipsum quis pulvinar. Suspendisse pretium risus a cursus pharetra. Nullam eu congue neque, non placerat arcu. Aliquam erat volutpat. Sed at nunc viverra, fermentum elit fringilla, ullamcorper tortor. Vivamus elementum libero id ante pretium, non feugiat augue varius. Quisque elementum, lorem a placerat lobortis, urna dui tincidunt felis, eu volutpat nisi mi in lectus. Suspendisse ornare condimentum ligula, vitae scelerisque justo volutpat et. Curabitur scelerisque tellus ut quam consequat imperdiet. Proin ornare elit leo. Integer elementum est nibh, ut faucibus neque ornare eget.',
                'author_id'        => 1,
            ],
            [
                'category_post_id' => 2,
                'name'             => 'Nulla',
                'description'      => 'Phasellus nec elementum nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam auctor nisl quis mauris ullamcorper, vitae lacinia nulla commodo. Suspendisse venenatis velit non lobortis bibendum. Vivamus quis sodales diam. Praesent pellentesque quis urna nec luctus. Duis enim orci, interdum tempor magna in, dictum pretium sapien. Nulla lobortis, nisi vel tincidunt lobortis, neque mauris feugiat risus, in ullamcorper risus lorem rhoncus mi. Mauris dictum enim in mauris ornare fermentum. Quisque vel enim vel lorem facilisis scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed finibus varius massa non cursus. Nulla porta metus et convallis luctus. Mauris feugiat nec ligula eu ullamcorper. Nunc consequat, tellus et malesuada ullamcorper, felis nunc rutrum mi, sit amet placerat elit sapien vel velit.',
                'author_id'        => 9,
            ],
            [
                'category_post_id' => 4,
                'name'             => 'Suspendisse potenti',
                'description'      => 'Suspendisse potenti. Pellentesque id justo rutrum, auctor felis a, convallis velit. Nullam sagittis neque ut mi sagittis ullamcorper. Mauris non massa et dolor varius dignissim. Etiam consectetur tortor ligula, in tempus odio tempus vel. Sed vel porta sem. Sed non eros lectus. Phasellus in vulputate tellus. Proin porttitor pulvinar eleifend.',
                'author_id'        => 6,
            ],
            [
                'category_post_id' => 5,
                'name'             => 'Mauris',
                'description'      => 'Mauris at turpis sed ipsum bibendum tristique vel eget turpis. Ut ultricies, turpis vel finibus pellentesque, purus nisl luctus massa, eget fermentum enim lorem tempor nisl. Cras sit amet massa a augue tristique ultrices. Nullam quam nibh, faucibus blandit mauris sed, imperdiet elementum nulla. Duis pharetra nibh at lobortis sagittis. In pellentesque, nibh eu venenatis cursus, turpis lectus malesuada felis, et eleifend erat ipsum at magna. Praesent in malesuada leo, non dignissim orci. Phasellus pulvinar tortor nec lacus mattis consequat. Sed non libero non nibh ullamcorper finibus. Aliquam erat volutpat.',
                'author_id'        => 8,
            ],
            [
                'category_post_id' => 2,
                'name'             => 'Fusce',
                'description'      => 'Fusce mollis condimentum velit. Nulla dictum vehicula nibh quis congue. Nunc consectetur risus id justo molestie, in sollicitudin nunc aliquet. Quisque quis fermentum ante. Ut sagittis nibh sed tincidunt vehicula. Quisque massa est, sodales sit amet sem non, rutrum fermentum orci. Mauris suscipit sollicitudin orci, a facilisis ante pharetra vel. Praesent varius tristique elit. Donec egestas dolor a accumsan porttitor. Pellentesque eu fringilla ex. Nulla eu eros nec turpis fringilla ultricies.',
                'author_id'        => 5,
            ],
            [
                'category_post_id' => 6,
                'name'             => 'Nam',
                'description'      => 'Nam id ipsum et dui molestie semper sit amet ut ipsum. Morbi tincidunt feugiat magna, vitae iaculis nisi tempus a. Ut ut porttitor erat. Aenean at arcu ut purus vehicula mattis. Ut tincidunt posuere orci, eu elementum massa blandit et. Cras dignissim sodales orci sed tincidunt. Fusce porta, sapien eget dictum accumsan, magna sem bibendum est, vel rutrum velit mi et dui. Cras dictum scelerisque lorem. Pellentesque lacinia mauris at purus ultricies, nec vehicula ante hendrerit.',
                'author_id'        => 6,
            ],
            [
                'category_post_id' => 2,
                'name'             => 'Sed',
                'description'      => 'Sed volutpat feugiat nibh vitae efficitur. Pellentesque at lacus elit. In ac massa ac nunc mattis iaculis ac et tellus. Integer vel malesuada sapien. Nunc quis quam ac metus fringilla tristique. Sed laoreet fringilla arcu, vel eleifend dui porttitor sed. Nunc non consectetur leo. Donec eget tellus libero. Etiam rutrum maximus aliquam. Donec at fringilla dui. Etiam vel est quam. Aliquam sed massa sed nulla luctus cursus ac in libero. Fusce fringilla gravida purus at accumsan.',
                'author_id'        => 7,
            ],
            [
                'category_post_id' => 4,
                'name'             => 'Curabitur',
                'description'      => 'Curabitur bibendum, quam at ornare tincidunt, quam elit gravida mauris, quis porta ipsum eros sit amet tortor. Maecenas in aliquam libero. Cras vulputate augue quis odio interdum efficitur. Fusce sed urna vehicula, fringilla risus sed, iaculis nisi. Quisque eget tempus risus. Curabitur viverra dignissim neque vel accumsan. Donec vehicula vestibulum suscipit.',
                'author_id'        => 3,
            ],
            [
                'category_post_id' => 1,
                'name'             => 'Vivamus',
                'description'      => 'Vivamus non dolor enim. Proin ornare odio ac ligula malesuada auctor. Ut laoreet diam ac eleifend sagittis. Curabitur tempus viverra quam quis pellentesque. Etiam mattis ante nec tempor ultrices. Vivamus malesuada tempor arcu tincidunt placerat. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
                'author_id'        => 4,
            ],
            [
                'category_post_id' => 2,
                'name'             => 'Suspendisse',
                'description'      => 'Suspendisse lobortis enim in egestas finibus. Proin dolor ligula, consequat sit amet tincidunt at, ornare at est. Nunc sit amet eleifend risus. Duis fermentum vitae dui non pharetra. Nulla imperdiet tellus est, a auctor turpis viverra vitae. Sed tristique, mi a luctus rutrum, felis nisl bibendum velit, aliquet dictum lorem velit porttitor sapien. Aenean venenatis tincidunt mi. Nunc ac convallis lectus. Nam dapibus congue velit id mollis.',
                'author_id'        => 5,
            ],
            [
                'category_post_id' => 4,
                'name'             => 'Aenean',
                'description'      => 'Aenean dignissim vestibulum dui vitae sollicitudin. Cras eu cursus mi. Ut vehicula, tortor id lacinia lacinia, turpis eros egestas leo, vitae ultrices velit nisl ac odio. Quisque tortor tellus, fermentum a pulvinar a, faucibus eget metus. Vestibulum mollis urna eget tempus viverra. Aenean cursus, augue nec blandit viverra, neque tortor sodales arcu, id egestas purus erat at sapien. Mauris consequat commodo vestibulum. Vestibulum sed feugiat odio. Aenean volutpat ligula facilisis nisi elementum, a faucibus orci feugiat.',
                'author_id'        => 8,
            ],
            [
                'category_post_id' => 4,
                'name'             => 'Phasellus',
                'description'      => 'Phasellus nec elementum nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam auctor nisl quis mauris ullamcorper, vitae lacinia nulla commodo. Suspendisse venenatis velit non lobortis bibendum. Vivamus quis sodales diam. Praesent pellentesque quis urna nec luctus. Duis enim orci, interdum tempor magna in, dictum pretium sapien. Nulla lobortis, nisi vel tincidunt lobortis, neque mauris feugiat risus, in ullamcorper risus lorem rhoncus mi. Mauris dictum enim in mauris ornare fermentum. Quisque vel enim vel lorem facilisis scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed finibus varius massa non cursus. Nulla porta metus et convallis luctus. Mauris feugiat nec ligula eu ullamcorper. Nunc consequat, tellus et malesuada ullamcorper, felis nunc rutrum mi, sit amet placerat elit sapien vel velit.',
                'author_id'        => 1,
            ],
        ]);
    }
}
