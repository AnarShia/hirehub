<template>
    <NavBar />
    
    <form @submit="login">
        <div class="asdf">
            <td>
                <div class="Employee">
                    <button
                        @click="prevent"
                        name="submit"
                        class="action_btn Employee"
                        type="submit"
                        value="Employee"
                    >
                        Employee
                    </button>
                </div>
            </td>
            <td>
                <div class="Company">
                    <button
                        name="submit"
                        class="action_btn Company"
                        type="submit"
                        value="Companies"
                        @click="$router.push('logincompany')"
                    >
                        Company
                    </button>
                </div>
            </td>
        </div>
        <h3 style="margin-left: 10px">Login to Hirehub</h3>

        <div class="input">
            <input
                type="email"
                id="email"
                onblur="this.placeholder = 'Enter your E-mail'"
                placeholder="Enter your E-mail"
                v-model="user.email"
                required
            />
        </div>
        <div class="input">
            <input
                type="password"
                id="password"
                onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter your Password'"
                placeholder="Enter your Password"
                v-model="user.password"
                required
            />
        </div>

        <button type="submit" style="margin-left: 50px">Login</button>

        <div class="err">
            {{ errorMsg }}
        </div>
    </form>
</template>

<script setup>
import { ref } from "vue";
import NavBar from "@/Shared/NavBar.vue";
const user = {
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    country: "",
    city: "",
};
</script>

<style lang="scss" scoped>
form {
    gap: 20px;
    margin: 0 auto;
    width: clamp(200px, 40%, 280px);
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0px 14px 20px 12px #00000012;
    border-radius: 8px;
    .asdf {
        border: none;
        border-radius: 20px;
        padding: 12px 12px;
        background: #00000012;
        .Employee {
            border: none;
            border-radius: 20px;
            width: 100px;
            padding: 2px 5px;
            background-color: #00000012;
            color: black;
            text-align: center;
        }
        .Company {
            border: none;
            border-radius: 20px;
            width: 100px;
            padding: 2px 5px;
            background-color: red;
            color: black;
        }
    }
    h3 {
        font-size: 22px;
        font-weight: 400;
        margin: 0;
    }
    .input {
        position: relative;
        input {
            border: 2px solid #232327;
            border-radius: 8px;
            background-color: #232327;
            outline: none;
            color: #bdbdbd;
            padding: 10px 12px;
            box-sizing: border-box;
            font-size: 14px;
            transition: all 0.3s ease;
            // &:focus,
            // &:hover,
            // &.filled {
            //     border: 2px solid var(--info-color);
            // }
            // &:focus + .placeholder span,
            // &.filled + .placeholder span {
            //     transform: translateY(-100%);
            // }
        }
        .placeholder {
            position: absolute;
            width: calc(100% - 24px);
            top: 10px;
            left: 12px;
            pointer-events: none;
            overflow: hidden;
            span {
                transition: all 0.3s ease;
                font-size: 14px;
            }
        }
    }
    button {
        border-radius: 20px;
        padding: 10px 12px;
        background-color: red;
        color: white;
    }
    .err {
        color: wheat;
        font-size: 12px;
        margin-top: 10px;
    }
}
</style>
