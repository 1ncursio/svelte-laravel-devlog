<script>
import { onMount } from 'svelte'
import Layout from '@/pages/_layout.svelte'
import { InertiaLink, page } from '@inertiajs/inertia-svelte'
import dayjs from 'dayjs'

const route = window.route
let { data: posts } = $page.props.posts

onMount(() => {
  console.log({ posts })
})
</script>

<Layout>
  <div class="py-12 md:py-16 lg:py-24 text-center font-raleway">
    <h1 class="text-4xl">1ncursio's devlog</h1>
  </div>
  <div class="container">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      {#each posts as post (post.id)}
        <!-- Column -->
        <div class="my-2 px-2 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
          <!-- Article -->
          <article class="overflow-hidden">
            <InertiaLink href="{route('posts.index', { id: post.id })}">
              <img
                alt="Placeholder"
                class="block h-auto w-full"
                src="{post.thumbnail}" />
            </InertiaLink>

            <header class="leading-tight p-1 md:p-2">
              <h1 class="text-xl mb-2">
                <InertiaLink
                  href="{route('posts.index', { id: post.id })}"
                  class="text-black">
                  {post.title}
                </InertiaLink>
              </h1>
              <p class="line-clamp-3 mb-2">
                {post.content}
              </p>
              <p class="text-gray-600 text-sm text-right">
                {dayjs(post.created_at).format('YYYY년 MM월 DD일')}
              </p>
            </header>
          </article>
          <!-- END Article -->
        </div>
      {/each}
      <!-- END Column -->
    </div>
  </div>
</Layout>
