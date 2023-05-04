import { navConstant } from '../utils/constants'

const loadNavMain = () => {
  return {
    type: navConstant.REQUEST_NAV,
    model: navConstant.NAV_MAIN,
    payload: {},
  }
}
const loadNavProject = () => {
  return {
    type: navConstant.LOAD_NAV,
    model: navConstant.NAV_PROJECT,
  }
}
const loadNavSetting = () => {
  return {
    type: navConstant.LOAD_NAV,
    model: navConstant.NAV_SETTING,
  }
}

const getNav = () => {
  return {
    type: navConstant.REQUEST_NAV,
    payload: {},
  }
}

export const navAction = { loadNavMain, loadNavProject, loadNavSetting, getNav }
