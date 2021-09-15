<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');
header > ul {
  font-family: 'Raleway', sans-serif;
}
</style>

<script>
import { InertiaLink } from '@inertiajs/inertia-svelte'
const route = window.route
</script>

<header class="h-14 px-64 flex items-center bg-gray-900 text-white font-light">
  <ul class="flex gap-4">
    <li>
      <InertiaLink href="{route('posts.index')}">DEVLOG</InertiaLink>
    </li>
    <li>PORTFOLIO</li>
  </ul>
</header>
