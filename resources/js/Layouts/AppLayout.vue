<script setup>
import { ref } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";
import ApplicationMark from "@/Components/ApplicationMark.vue";
import Banner from "@/Components/Banner.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
  router.put(
    route("current-team.update"),
    {
      team_id: team.id,
    },
    {
      preserveState: false,
    },
  );
};

const logout = () => {
  router.post(route("logout"));
};
</script>

<template>
  <div>
    <Head :title="title" />

    <Banner />

    <div class="min-h-screen bg-gray-100">
      <nav class="fixed top-0 w-full bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div
          class="flex justify-between sm:justify-normal sm:pr-4 items-center sm:items-stretch h-[80px]"
        >
          <div
            class="ml-8 md:ml-0 sm:h-screen sm:flex flex-col gap-8 sm:px-4 hover:px-6 transition-all sm:pt-4 items-center bg-white sm:border-r border-gray-100"
          >
            <div class="flex-shrink-0 flex items-center justify-center">
                <Link :href="route('dashboard')">
                <ApplicationMark class="block h-auto w-[60px]" />
                </Link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="bg-primary rounded-md inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('dashboard')"
                >
<svg width="25" height="25" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<line y1="24.9231" x2="50" y2="24.9231" stroke="#F5F5F5" stroke-width="4"/>
<line x1="25.0769" x2="25.0769" y2="50" stroke="#F5F5F5" stroke-width="4"/>
</svg>
                </Link>
              </button>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('laporan')"
                >
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_36_10048)">
<path d="M26.6667 7.99992H16L13.3334 5.33325H5.33335C3.86669 5.33325 2.68002 6.53325 2.68002 7.99992L2.66669 23.9999C2.66669 25.4666 3.86669 26.6666 5.33335 26.6666H26.6667C28.1334 26.6666 29.3334 25.4666 29.3334 23.9999V10.6666C29.3334 9.19992 28.1334 7.99992 26.6667 7.99992ZM26.6667 23.9999H5.33335V10.6666H26.6667V23.9999Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_36_10048">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
                </Link>
              </button>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('sumberdata')"
                >
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_36_10033)">
<path d="M26.6667 7.99992H16L13.3334 5.33325H5.33335C3.86669 5.33325 2.68002 6.53325 2.68002 7.99992L2.66669 23.9999C2.66669 25.4666 3.86669 26.6666 5.33335 26.6666H26.6667C28.1334 26.6666 29.3334 25.4666 29.3334 23.9999V10.6666C29.3334 9.19992 28.1334 7.99992 26.6667 7.99992ZM26.6667 23.9999H5.33335V7.99992H12.2267L14.8934 10.6666H26.6667V23.9999ZM24 15.9999H8.00002V13.3333H24V15.9999ZM18.6667 21.3333H8.00002V18.6666H18.6667V21.3333Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_36_10033">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
                </Link>
              </button>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('dashboard')"
                >
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_36_10154)">
<path d="M24 2.66675H7.99998C6.53331 2.66675 5.33331 3.86675 5.33331 5.33341V26.6667C5.33331 28.1334 6.53331 29.3334 7.99998 29.3334H24C25.4666 29.3334 26.6666 28.1334 26.6666 26.6667V5.33341C26.6666 3.86675 25.4666 2.66675 24 2.66675ZM12 5.33341H14.6666V12.0001L13.3333 11.0001L12 12.0001V5.33341ZM24 26.6667H7.99998V5.33341H9.33331V17.3334L13.3333 14.3334L17.3333 17.3334V5.33341H24V26.6667Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_36_10154">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
                </Link>
              </button>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('dashboard')"
                >
<svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.9067 15.3067C22.96 14.8801 23 14.4534 23 14.0001C23 13.5467 22.96 13.1201 22.9067 12.6934L25.72 10.4934C25.9734 10.2934 26.04 9.93341 25.88 9.64008L23.2134 5.02675C23.0934 4.81341 22.8667 4.69341 22.6267 4.69341C22.5467 4.69341 22.4667 4.70675 22.4 4.73342L19.08 6.06675C18.3867 5.53342 17.64 5.09342 16.8267 4.76008L16.32 1.22675C16.28 0.906748 16 0.666748 15.6667 0.666748H10.3334C10 0.666748 9.72003 0.906748 9.68003 1.22675L9.17336 4.76008C8.36003 5.09342 7.61336 5.54675 6.92003 6.06675L3.60003 4.73342C3.52003 4.70675 3.44003 4.69341 3.36003 4.69341C3.13336 4.69341 2.9067 4.81341 2.7867 5.02675L0.12003 9.64008C-0.0533034 9.93341 0.0266968 10.2934 0.28003 10.4934L3.09336 12.6934C3.04003 13.1201 3.00003 13.5601 3.00003 14.0001C3.00003 14.4401 3.04003 14.8801 3.09336 15.3067L0.28003 17.5067C0.0266968 17.7067 -0.03997 18.0667 0.12003 18.3601L2.7867 22.9734C2.9067 23.1867 3.13336 23.3067 3.37336 23.3067C3.45336 23.3067 3.53336 23.2934 3.60003 23.2667L6.92003 21.9334C7.61336 22.4667 8.36003 22.9067 9.17336 23.2401L9.68003 26.7734C9.72003 27.0934 10 27.3334 10.3334 27.3334H15.6667C16 27.3334 16.28 27.0934 16.32 26.7734L16.8267 23.2401C17.64 22.9067 18.3867 22.4534 19.08 21.9334L22.4 23.2667C22.48 23.2934 22.56 23.3067 22.64 23.3067C22.8667 23.3067 23.0934 23.1867 23.2134 22.9734L25.88 18.3601C26.04 18.0667 25.9734 17.7067 25.72 17.5067L22.9067 15.3067V15.3067ZM20.2667 13.0267C20.32 13.4401 20.3334 13.7201 20.3334 14.0001C20.3334 14.2801 20.3067 14.5734 20.2667 14.9734L20.08 16.4801L21.2667 17.4134L22.7067 18.5334L21.7734 20.1467L20.08 19.4667L18.6934 18.9067L17.4934 19.8134C16.92 20.2401 16.3734 20.5601 15.8267 20.7867L14.4134 21.3601L14.2 22.8667L13.9334 24.6667H12.0667L11.8134 22.8667L11.6 21.3601L10.1867 20.7867C9.61336 20.5467 9.08003 20.2401 8.5467 19.8401L7.33336 18.9067L5.92003 19.4801L4.2267 20.1601L3.29336 18.5467L4.73336 17.4267L5.92003 16.4934L5.73336 14.9867C5.69336 14.5734 5.6667 14.2667 5.6667 14.0001C5.6667 13.7334 5.69336 13.4267 5.73336 13.0267L5.92003 11.5201L4.73336 10.5867L3.29336 9.46675L4.2267 7.85341L5.92003 8.53342L7.3067 9.09341L8.5067 8.18675C9.08003 7.76008 9.6267 7.44008 10.1734 7.21341L11.5867 6.64008L11.8 5.13341L12.0667 3.33341H13.92L14.1734 5.13341L14.3867 6.64008L15.8 7.21341C16.3734 7.45341 16.9067 7.76008 17.44 8.16008L18.6534 9.09341L20.0667 8.52008L21.76 7.84008L22.6934 9.45342L21.2667 10.5867L20.08 11.5201L20.2667 13.0267ZM13 8.66675C10.0534 8.66675 7.6667 11.0534 7.6667 14.0001C7.6667 16.9467 10.0534 19.3334 13 19.3334C15.9467 19.3334 18.3334 16.9467 18.3334 14.0001C18.3334 11.0534 15.9467 8.66675 13 8.66675ZM13 16.6667C11.5334 16.6667 10.3334 15.4667 10.3334 14.0001C10.3334 12.5334 11.5334 11.3334 13 11.3334C14.4667 11.3334 15.6667 12.5334 15.6667 14.0001C15.6667 15.4667 14.4667 16.6667 13 16.6667Z" fill="#323232"/>
</svg>
                </Link>
              </button>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:flex">
              <button data-state="closed">
                <Link
                  class="inline-flex items-center p-4 transition duration-150 ease-in-out"
                  :href="route('dashboard')"
                >
<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_36_10176)">
<path d="M28 16.2933C28 8.97333 22.32 4 16 4C9.74669 4 4.00002 8.86667 4.00002 16.3733C3.20002 16.8267 2.66669 17.68 2.66669 18.6667V21.3333C2.66669 22.8 3.86669 24 5.33335 24H6.66669V15.8667C6.66669 10.7067 10.84 6.53333 16 6.53333C21.16 6.53333 25.3334 10.7067 25.3334 15.8667V25.3333H14.6667V28H25.3334C26.8 28 28 26.8 28 25.3333V23.7067C28.7867 23.2933 29.3334 22.48 29.3334 21.52V18.4533C29.3334 17.52 28.7867 16.7067 28 16.2933Z" fill="#323232"/>
<path d="M12 18.6667C12.7364 18.6667 13.3334 18.0697 13.3334 17.3333C13.3334 16.597 12.7364 16 12 16C11.2636 16 10.6667 16.597 10.6667 17.3333C10.6667 18.0697 11.2636 18.6667 12 18.6667Z" fill="#323232"/>
<path d="M20 18.6667C20.7364 18.6667 21.3334 18.0697 21.3334 17.3333C21.3334 16.597 20.7364 16 20 16C19.2636 16 18.6667 16.597 18.6667 17.3333C18.6667 18.0697 19.2636 18.6667 20 18.6667Z" fill="#323232"/>
<path d="M24 14.7067C23.36 10.9067 20.0533 8 16.0667 8C12.0267 8 7.68 11.3467 8.02667 16.6C11.32 15.2533 13.8 12.32 14.5067 8.74667C16.2533 12.2533 19.84 14.6667 24 14.7067Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_36_10176">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
                </Link>
              </button>
            </div>

          </div>
          <div class="flex w-full justify-between ml-8 sm:ml-4 mr-8">
            <!-- Logo -->
            <div class="flex items-center">
              <h6>Datadok</h6>
            </div>

            <div class="hidden sm:flex sm:items-center justify-end gap-4">
              <div class="ms-3 relative">
                <!-- Teams Dropdown -->
                <Dropdown
                  v-if="$page.props.jetstream.hasTeamFeatures"
                  align="right"
                  width="60"
                >
                  <template #trigger>
                    <span class="inline-flex rounded-md items-center gap-4">
                      <button
                        type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150"
                      >
                        <p>{{ $page.props.auth.user.current_team.name }}</p>
                      </button>

                      <svg
                        width="28"
                        height="20"
                        viewBox="0 0 28 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.99999 12.3334C6.87999 12.3334 0.666656 13.8934 0.666656 17.0001V19.3334H19.3333V17.0001C19.3333 13.8934 13.12 12.3334 9.99999 12.3334ZM3.78666 16.6667C4.90666 15.8934 7.61332 15.0001 9.99999 15.0001C12.3867 15.0001 15.0933 15.8934 16.2133 16.6667H3.78666ZM9.99999 10.0001C12.5733 10.0001 14.6667 7.90675 14.6667 5.33341C14.6667 2.76008 12.5733 0.666748 9.99999 0.666748C7.42666 0.666748 5.33332 2.76008 5.33332 5.33341C5.33332 7.90675 7.42666 10.0001 9.99999 10.0001ZM9.99999 3.33341C11.1067 3.33341 12 4.22675 12 5.33341C12 6.44008 11.1067 7.33341 9.99999 7.33341C8.89332 7.33341 7.99999 6.44008 7.99999 5.33341C7.99999 4.22675 8.89332 3.33341 9.99999 3.33341ZM19.3867 12.4134C20.9333 13.5334 22 15.0267 22 17.0001V19.3334H27.3333V17.0001C27.3333 14.3067 22.6667 12.7734 19.3867 12.4134V12.4134ZM18 10.0001C20.5733 10.0001 22.6667 7.90675 22.6667 5.33341C22.6667 2.76008 20.5733 0.666748 18 0.666748C17.28 0.666748 16.6133 0.840081 16 1.13341C16.84 2.32008 17.3333 3.77341 17.3333 5.33341C17.3333 6.89341 16.84 8.34675 16 9.53341C16.6133 9.82675 17.28 10.0001 18 10.0001Z"
                          fill="#1E1E1E"
                        />
                      </svg>

                      <svg
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_38_10449)">
                          <path
                            d="M9.88 11.4534L16 17.56L22.12 11.4534L24 13.3334L16 21.3334L8 13.3334L9.88 11.4534Z"
                            fill="#1E1E1E"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_38_10449">
                            <rect width="32" height="32" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </template>

                  <template #content>
                    <div class="w-60">
                      <!-- Team Management -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                        Manage Team
                      </div>

                      <!-- Team Settings -->
                      <DropdownLink
                        :href="
                          route(
                            'teams.show',
                            $page.props.auth.user.current_team,
                          )
                        "
                      >
                        Team Settings
                      </DropdownLink>

                      <DropdownLink
                        v-if="$page.props.jetstream.canCreateTeams"
                        :href="route('teams.create')"
                      >
                        Create New Team
                      </DropdownLink>

                      <!-- Team Switcher -->
                      <template
                        v-if="$page.props.auth.user.all_teams.length > 1"
                      >
                        <div class="border-t border-gray-200" />

                        <div class="block px-4 py-2 text-xs text-gray-400">
                          Switch Teams
                        </div>

                        <template
                          v-for="team in $page.props.auth.user.all_teams"
                          :key="team.id"
                        >
                          <form @submit.prevent="switchToTeam(team)">
                            <DropdownLink as="button">
                              <div class="flex items-center">
                                <svg
                                  v-if="
                                    team.id ==
                                    $page.props.auth.user.current_team_id
                                  "
                                  class="me-2 h-5 w-5 text-green-400"
                                  xmlns="http://www.w3.org/2000/svg"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke-width="1.5"
                                  stroke="currentColor"
                                >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                  />
                                </svg>

                                <div>{{ team.name }}</div>
                              </div>
                            </DropdownLink>
                          </form>
                        </template>
                      </template>
                    </div>
                  </template>
                </Dropdown>
              </div>

              <!-- Settings Dropdown -->
              <div class="ms-3 relative">
                <Dropdown align="right" width="48">
                  <template #trigger>
                    <button
                      v-if="$page.props.jetstream.managesProfilePhotos"
                      class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
                    >
                      <img
                        class="h-8 w-8 rounded-full object-cover"
                        :src="$page.props.auth.user.profile_photo_url"
                        :alt="$page.props.auth.user.name"
                      />
                    </button>

                    <span v-else class="inline-flex rounded-md">
                      <img src="images/pp.png" alt="" />
                    </span>
                  </template>

                  <template #content>
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                      Manage Account
                    </div>

                    <DropdownLink :href="route('profile.show')">
                      Profile
                    </DropdownLink>

                    <DropdownLink
                      v-if="$page.props.jetstream.hasApiFeatures"
                      :href="route('api-tokens.index')"
                    >
                      API Tokens
                    </DropdownLink>

                    <div class="border-t border-gray-200" />

                    <!-- Authentication -->
                    <form @submit.prevent="logout">
                      <DropdownLink as="button"> Log Out </DropdownLink>
                    </form>
                  </template>
                </Dropdown>
              </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden justify-end">
              <button
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                @click="showingNavigationDropdown = !showingNavigationDropdown"
              >
                <svg
                  class="h-6 w-6"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    :class="{
                      hidden: showingNavigationDropdown,
                      'inline-flex': !showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !showingNavigationDropdown,
                      'inline-flex': showingNavigationDropdown,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink
              :href="route('dashboard')"
              :active="route().current('dashboard')"
            >
              Beranda
            </ResponsiveNavLink>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
              <div
                v-if="$page.props.jetstream.managesProfilePhotos"
                class="shrink-0 me-3"
              >
                <img
                  class="h-10 w-10 rounded-full object-cover"
                  :src="$page.props.auth.user.profile_photo_url"
                  :alt="$page.props.auth.user.name"
                />
              </div>

              <div>
                <div class="font-medium text-base text-gray-800">
                  {{ $page.props.auth.user.name }}
                </div>
                <div class="font-medium text-sm text-gray-500">
                  {{ $page.props.auth.user.email }}
                </div>
              </div>
            </div>

            <div class="mt-3 space-y-1">
              <ResponsiveNavLink
                :href="route('profile.show')"
                :active="route().current('profile.show')"
              >
                Profile
              </ResponsiveNavLink>

              <ResponsiveNavLink
                v-if="$page.props.jetstream.hasApiFeatures"
                :href="route('api-tokens.index')"
                :active="route().current('api-tokens.index')"
              >
                API Tokens
              </ResponsiveNavLink>

              <!-- Authentication -->
              <form method="POST" @submit.prevent="logout">
                <ResponsiveNavLink as="button"> Log Out </ResponsiveNavLink>
              </form>

              <!-- Team Management -->
              <template v-if="$page.props.jetstream.hasTeamFeatures">
                <div class="border-t border-gray-200" />

                <div class="block px-4 py-2 text-xs text-gray-400">
                  Manage Team
                </div>

                <!-- Team Settings -->
                <ResponsiveNavLink
                  :href="
                    route('teams.show', $page.props.auth.user.current_team)
                  "
                  :active="route().current('teams.show')"
                >
                  Team Settings
                </ResponsiveNavLink>

                <ResponsiveNavLink
                  v-if="$page.props.jetstream.canCreateTeams"
                  :href="route('teams.create')"
                  :active="route().current('teams.create')"
                >
                  Create New Team
                </ResponsiveNavLink>

                <!-- Team Switcher -->
                <template v-if="$page.props.auth.user.all_teams.length > 1">
                  <div class="border-t border-gray-200" />

                  <div class="block px-4 py-2 text-xs text-gray-400">
                    Switch Teams
                  </div>

                  <template
                    v-for="team in $page.props.auth.user.all_teams"
                    :key="team.id"
                  >
                    <form @submit.prevent="switchToTeam(team)">
                      <ResponsiveNavLink as="button">
                        <div class="flex items-center">
                          <svg
                            v-if="
                              team.id == $page.props.auth.user.current_team_id
                            "
                            class="me-2 h-5 w-5 text-green-400"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                          </svg>
                          <div>{{ team.name }}</div>
                        </div>
                      </ResponsiveNavLink>
                    </form>
                  </template>
                </template>
              </template>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header v-if="$slots.header" class="mt-[80px] md:mt-12 md:pl-16 bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header" />
        </div>
      </header>

      <!-- Page Content -->
      <main class="md:pl-12">
        <slot />
      </main>
    </div>
  </div>
</template>
