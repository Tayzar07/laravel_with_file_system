
<x-layout>
    <!-- singloe blog section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">Blog Title</h3>
          <p class="lh-md">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem,
            veritatis repellendus quod adipisci quidem quos deserunt dolores
            harum sint perspiciatis nostrum, praesentium totam, vero ipsa
            voluptatem odit hic omnis sed neque sapiente quibusdam tempore.
            Quos, iste odit fuga eos atque quas neque sunt perspiciatis, qui,
            tempore consectetur architecto nesciunt aliquid nisi distinctio enim
            quae fugiat eius? Odio, fugit et aperiam iusto eligendi, quo atque
            quis minus modi maxime sequi ratione incidunt laudantium voluptas
            nam expedita dolor pariatur nesciunt accusantium magni quod. Fuga
            aliquam fugiat rerum eos excepturi a quibusdam ipsum eum repellat
            quae veniam beatae distinctio nemo ut, suscipit optio aspernatur
            earum ducimus minus atque odit animi repudiandae. Enim cupiditate
            minus voluptate ad, natus ea eos mollitia, ut voluptatibus
            necessitatibus repellat delectus quod earum! Deserunt, praesentium
            vero placeat quidem excepturi quisquam sint odio reiciendis omnis
            consequuntur saepe eum nulla non ratione minus atque nemo facere ut
            quia ullam itaque impedit. Perspiciatis pariatur nostrum
            exercitationem eius nemo blanditiis repudiandae saepe, in vero
            repellat eveniet numquam totam similique mollitia delectus quod
            earum doloremque magnam excepturi aut vitae illo architecto
            officiis! Tempora cum debitis asperiores aut quidem. Ab totam, ullam
            tempore quod quaerat delectus quam cumque libero earum et accusamus
            consequuntur, aliquam minus mollitia soluta consequatur cum? Quis
            reprehenderit odio ullam quam molestias vitae non amet rem in quod
            facilis nihil, vel dicta tenetur, omnis provident deleniti
            perferendis. Aperiam repellat optio magnam asperiores, maxime vel
            non dolore suscipit libero, aspernatur earum at quibusdam
            repellendus sapiente? Sunt esse nulla sapiente ex rerum in voluptate
            deleniti debitis adipisci eligendi expedita temporibus quisquam
            dolorem facilis id animi nesciunt vero veritatis aliquam, quae
            minus! Voluptatem illo repellat mollitia fuga, labore corporis nemo
            asperiores, explicabo, quia accusamus provident vero! Quasi
            repudiandae sunt reprehenderit sit fugit dolore, atque molestiae
            cupiditate blanditiis consectetur quam earum consequatur optio sed
            ea facere.
          </p>
        </div>
      </div>
    </div>
    {{-- subscribe for new blogs section --}}
    <x-subscribe-for-new-blogs />
    {{-- blogs you may like section --}}
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>
