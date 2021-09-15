<script>
import { onMount } from 'svelte'
import Layout from '@/pages/_layout.svelte'
import { InertiaLink } from '@inertiajs/inertia-svelte'
const route = window.route
let posts = []
onMount(() => {
  console.log('mounted!')
})
</script>

<Layout>
  posts
  {#each posts as post}
    <InertiaLink href="{route('posts.index', post.id)}">
      {post.title}
    </InertiaLink>
  {/each}
</Layout>
