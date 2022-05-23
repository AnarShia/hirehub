<template>
    <header :class="{ 'scrolled-nav': scrolledNav }">
        <nav>
            <div class="branding">
                <img class="logo" :src="image" />
            </div>
            <ul class="navigation">
                <li>
                    <Link href="/" class="link">Home</Link>
                </li>
                <li>
                    <Link href="/jobs" class="link">Jobs</Link>
                </li>
                <li>
                    <Link href="/companies" class="link">Companies</Link>
                </li>

                <li v-if="username">
                    <Link href="/signup" class="link">Sign up</Link>
                </li>
                <li v-if="username">
                    <Link href="/login" class="link">Login</Link>
                </li>
                <li v-if="username">
                    <Link style="font-size: x-small" href="" class="link"
                        >Welcome {{ username }}</Link
                    >
                </li>
            </ul>
            <Link
                style="padding-top: 10px; color: red; font-size: 10px"
                as="button"
                >Log Out</Link
            >
        </nav>
    </header>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import image from "../assets/images/logo.png";

export default {
    components: {
        Link,
    },

    data() {
        return {
            username: "username",
            image: image,
            scrolledNav: false,
        };
    },
};
</script>

<style lang="scss">
* {
    margin: 0;
    padding: 0;
}
header {
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    transition: 0.5s ease all;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;

    nav {
        display: flex;
        flex-direction: row;
        padding: 12px 0;
        transition: 0.5s ease all;
        width: 90%;
        margin: 0 auto;

        @media (min-width: 1140px) {
            max-width: 1140px;
        }
        ul,
        .link {
            font-weight: 500;
            color: #fff;
            list-style: none;
            text-decoration: none;
        }
        li {
            text-transform: uppercase;
            padding: 16px;
            margin-left: 16px;
        }
        .link {
            font-size: 14px;
            transition: 0.5s ease all;
            padding-bottom: 4px;
            border-bottom: 1px solid transparent;

            &:hover {
                color: #bd0b08;
                border-color: #bd0b08;
            }
        }
        .branding {
            display: flex;
            align-items: center;
            img {
                width: 50px;
                transition: 0.5s ease all;
            }
        }
        .navigation {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: flex-end;
        }
        .icon {
            display: flex;
            align-items: center;
            position: absolute;
            top: 0;
            right: 24px;
            height: 100%;
        }
        .myicon {
            cursor: pointer;
            font-size: 24px;
            transition: 0.8s ease all;
        }
        .icon-active {
            transform: rotate(180deg);
        }
        .dropdown-nav {
            display: flex;
            flex-direction: column;
            position: fixed;
            width: 100%;
            max-width: 250px;
            height: 100%;
            background-color: #fff;
            top: 0px;
            left: 0;

            li {
                margin-left: 0;
                .link {
                    color: #000;
                }
            }
        }
        .mobile-nav-enter-active,
        .mobile-nav-leave-active {
            transition: 1s ease all;
        }
        .mobile-nav-enter-from,
        .mobile-nav-leave-to {
            transform: translateX(-250px);
        }
        .mobile-nav-enter-to {
            transform: translateX(0);
        }
    }
}
.scrolled-nav {
    background-color: #000;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06);
    nav {
        padding: 8px 0;

        .branding {
            img {
                width: 40px;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
                    0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
        }
    }
}
</style>
