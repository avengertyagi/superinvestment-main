<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>
    <style>
        [x-cloak] { display: none }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100" >
<div style="min-height: 640px;" class="bg-gray-100">
    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="h-screen flex overflow-hidden bg-gray-100">
        @include('admin.layouts.navigation')

        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            @include('admin.layouts.topbar')

            <header class="px-4 py-6 max-w-7xl sm:px-6 lg:px-8">

                <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">

                    {{ $header }}

                </div>

            </header>

            <!-- Page Content -->
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                {{ $slot }}
            </main>

        </div>

        <x-admin.notice></x-admin.notice>

    </div>
</div>

<script type="text/javascript">
    window.Components={},window.Components.listbox=function(t){return{init(){this.optionCount=this.$refs.listbox.children.length,this.$watch("activeIndex",(t=>{this.open&&(null!==this.activeIndex?this.activeDescendant=this.$refs.listbox.children[this.activeIndex].id:this.activeDescendant="")}))},activeDescendant:null,optionCount:null,open:!1,activeIndex:null,selectedIndex:0,get active(){return this.items[this.activeIndex]},get[t.modelName||"selected"](){return this.items[this.selectedIndex]},choose(t){this.selectedIndex=t,this.open=!1},onButtonClick(){this.open||(this.activeIndex=this.selectedIndex,this.open=!0,this.$nextTick((()=>{this.$refs.listbox.focus(),this.$refs.listbox.children[this.activeIndex].scrollIntoView({block:"nearest"})})))},onOptionSelect(){null!==this.activeIndex&&(this.selectedIndex=this.activeIndex),this.open=!1,this.$refs.button.focus()},onEscape(){this.open=!1,this.$refs.button.focus()},onArrowUp(){this.activeIndex=this.activeIndex-1<0?this.optionCount-1:this.activeIndex-1,this.$refs.listbox.children[this.activeIndex].scrollIntoView({block:"nearest"})},onArrowDown(){this.activeIndex=this.activeIndex+1>this.optionCount-1?0:this.activeIndex+1,this.$refs.listbox.children[this.activeIndex].scrollIntoView({block:"nearest"})},...t}},window.Components.menu=function(t={open:!1}){return{init(){this.items=Array.from(this.$el.querySelectorAll('[role="menuitem"]')),this.$watch("open",(()=>{this.open&&(this.activeIndex=-1)}))},activeDescendant:null,activeIndex:null,items:null,open:t.open,focusButton(){this.$refs.button.focus()},onButtonClick(){this.open=!this.open,this.open&&this.$nextTick((()=>{this.$refs["menu-items"].focus()}))},onButtonEnter(){this.open=!this.open,this.open&&(this.activeIndex=0,this.activeDescendant=this.items[this.activeIndex].id,this.$nextTick((()=>{this.$refs["menu-items"].focus()})))},onArrowUp(){if(!this.open)return this.open=!0,this.activeIndex=this.items.length-1,void(this.activeDescendant=this.items[this.activeIndex].id);0!==this.activeIndex&&(this.activeIndex=-1===this.activeIndex?this.items.length-1:this.activeIndex-1,this.activeDescendant=this.items[this.activeIndex].id)},onArrowDown(){if(!this.open)return this.open=!0,this.activeIndex=0,void(this.activeDescendant=this.items[this.activeIndex].id);this.activeIndex!==this.items.length-1&&(this.activeIndex=this.activeIndex+1,this.activeDescendant=this.items[this.activeIndex].id)},onClickAway(t){if(this.open){const e=["[contentEditable=true]","[tabindex]","a[href]","area[href]","button:not([disabled])","iframe","input:not([disabled])","select:not([disabled])","textarea:not([disabled])"].map((t=>`${t}:not([tabindex='-1'])`)).join(",");this.open=!1,t.target.closest(e)||this.focusButton()}}}},window.Components.popoverGroup=function(){return{__type:"popoverGroup",init(){let t=e=>{document.body.contains(this.$el)?e.target instanceof Element&&!this.$el.contains(e.target)&&window.dispatchEvent(new CustomEvent("close-popover-group",{detail:this.$el})):window.removeEventListener("focus",t,!0)};window.addEventListener("focus",t,!0)}}},window.Components.popover=function({open:t=!1,focus:e=!1}={}){const i=["[contentEditable=true]","[tabindex]","a[href]","area[href]","button:not([disabled])","iframe","input:not([disabled])","select:not([disabled])","textarea:not([disabled])"].map((t=>`${t}:not([tabindex='-1'])`)).join(",");return{__type:"popover",open:t,init(){e&&this.$watch("open",(t=>{t&&this.$nextTick((()=>{!function(t){const e=Array.from(t.querySelectorAll(i));!function t(i){void 0!==i&&(i.focus({preventScroll:!0}),document.activeElement!==i&&t(e[e.indexOf(i)+1]))}(e[0])}(this.$refs.panel)}))}));let t=i=>{if(!document.body.contains(this.$el))return void window.removeEventListener("focus",t,!0);let n=e?this.$refs.panel:this.$el;if(this.open&&i.target instanceof Element&&!n.contains(i.target)){let t=this.$el;for(;t.parentNode;)if(t=t.parentNode,t.__x instanceof this.constructor){if("popoverGroup"===t.__x.$data.__type)return;if("popover"===t.__x.$data.__type)break}this.open=!1}};window.addEventListener("focus",t,!0)},onEscape(){this.open=!1,this.restoreEl&&this.restoreEl.focus()},onClosePopoverGroup(t){t.detail.contains(this.$el)&&(this.open=!1)},toggle(t){this.open=!this.open,this.open?this.restoreEl=t.currentTarget:this.restoreEl&&this.restoreEl.focus()}}},window.Components.radioGroup=function({initialCheckedIndex:t=0}={}){return{value:void 0,init(){this.value=Array.from(this.$el.querySelectorAll("input"))[t]?.value}}};
</script>
</body>
</html>
