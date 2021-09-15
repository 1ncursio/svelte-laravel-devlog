<script>
import { onMount } from 'svelte'
import Layout from '@/pages/_layout.svelte'
import { InertiaLink, page } from '@inertiajs/inertia-svelte'

const route = window.route
let { data: posts } = $page.props.posts

onMount(() => {
  console.log({ posts })
})
</script>

<Layout>
  posts
  <div class="grid grid-cols-3 gap-4 ">
    {#each posts as post (post.id)}
      <article class="w-80">
        <InertiaLink href="{route('posts.index', { id: post.id })}">
          {post.title}
          <img src="{post.thumbnail}" alt="" class="w-80 h-80" />
        </InertiaLink>
      </article>
    {/each}
  </div>
</Layout>
