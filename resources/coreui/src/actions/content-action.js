import { contentConstant } from '../utils/constants'

const getList = () => {
  return { type: contentConstant.REQUEST_CONTENT, payload: {} }
}

export const contentAction = { getList }
