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
  {#each posts as post (post.id)}
    <InertiaLink href="{route('posts.index', { id: post.id })}">
      {post.title}
      <img src="{post.thumbnail}" alt="" />
    </InertiaLink>
  {/each}
</Layout>
