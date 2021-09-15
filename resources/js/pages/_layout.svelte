<script>
import AppFooter from '@/components/AppFooter.svelte'

import AppHeader from '@/components/AppHeader.svelte'
import AppMain from '@/components/AppMain.svelte'
</script>

<main>
  <AppHeader />
  <AppMain>
    <slot />
  </AppMain>
  <AppFooter />
</main>
