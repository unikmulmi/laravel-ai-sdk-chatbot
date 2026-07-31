<div 
    x-data="{ autoScroll: true }"
    x-on:message-added.window="
        $nextTick(() => {
            if (autoScroll) {
                const el = $refs.messages;
                el.scrollTop = el.scrollHeight;
            }
        })
    "
    class="flex flex-col h-screen bg-zinc-950"
>
