import { tableConstant } from '../utils/constants'

const initialState = {
  data: [],
  meta: {},
  detail: {},
}

const tableReducer = (state = initialState, action) => {
  switch (action.type) {
    case tableConstant.LOAD_TABLE:
      return { ...state, data: action.payload.data, meta: action.payload.meta }
    default:
      return state
  }
}

export default tableReducer
