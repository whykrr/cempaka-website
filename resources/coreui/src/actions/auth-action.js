import { authConstant } from '../utils/constants'

const login = (username, password) => {
  return { type: authConstant.LOGIN_REQUEST, payload: { email: username, password } }
}
const logout = () => {
  return {
    type: authConstant.LOGOUT,
    payload: {},
  }
}

export const authAction = { login, logout }
