const initialState = {
  sidebarShow: true,
}

const sidebarReducer = (state = initialState, { type, ...rest }) => {
  switch (type) {
    case 'set':
      return { ...state, ...rest }
    default:
      return state
  }
}

export default sidebarReducer
