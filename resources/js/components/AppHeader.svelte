<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap');
</style>

<script>
import { InertiaLink } from '@inertiajs/inertia-svelte'
const route = window.route
</script>

<header class="h-14 flex items-center bg-gray-900 text-white font-light">
  <nav class="main-container font-raleway">
    <ul class="flex gap-4">
      <li>
        <InertiaLink href="{route('posts.index')}">DEVLOG</InertiaLink>
      </li>
      <li>PORTFOLIO</li>
    </ul>
  </nav>
</header>
