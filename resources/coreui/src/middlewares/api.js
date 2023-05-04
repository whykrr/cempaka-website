import axios from 'axios'
import { APIService } from '../services'
import { authConstant, contentConstant, navConstant, tableConstant } from '../utils/constants'
import { projectConstant } from '../utils/constants/project-contant'

const CancelToken = axios.CancelToken
const source = CancelToken.source()

export const apiMiddleware =
  ({ dispatch }) =>
    (next) =>
      (action) => {
        next(action)
        switch (action.type) {
          case authConstant.LOGIN_REQUEST:
            APIService.openAPIRequest('POST', '/auth/login', action.payload)
              .then((response) => {
                dispatch({ type: authConstant.LOGIN_SUCCESS, payload: response.data })
              })
              .catch((error) => {
                dispatch({ type: authConstant.LOGIN_ERROR, payload: error })
              })
            break
          case contentConstant.REQUEST_CONTENT:
            var query = getQuery(action.payload)
            APIService.privateAPIRequest('GET', `/contents${query}`, {})
              .then((response) => {
                dispatch({ type: contentConstant.REQUEST_CONTENT_SUCCESS, payload: response.data })
                dispatch({ type: tableConstant.LOAD_TABLE, payload: response.data })
              })
              .catch((error) => {
                dispatch(handleError(error))
              })
            break
          case projectConstant.REQUEST_PROJECT:
            var query = getQuery(action.payload)
            APIService.privateAPIRequest('GET', `/projects${query}`, {})
              .then((response) => {
                // dispatch({ type: contentConstant.REQUEST_CONTENT_SUCCESS, payload: response.data })
                dispatch({ type: tableConstant.LOAD_TABLE, payload: response.data })
              })
              .catch((error) => {
                dispatch(handleError(error))
              })
            break
          case navConstant.REQUEST_NAV:
            APIService.privateAPIRequest('GET', '/contents/categories?perpage=20', {})
              .then((response) => {
                dispatch({ type: navConstant.REQUEST_NAV_SUCCESS, payload: response.data })
              })
              .catch((error) => {
                dispatch(handleError(error))
              })
            break
          default:
            break
        }
      }

const getQuery = (payload) => {
  var query = '?'
  Object.keys(payload).forEach((key) => {
    query += `${key}=${payload[key]}&`
  })

  return query
}

const handleError = (error) => {
  switch (error.response.status) {
    case 401:
      return { type: authConstant.LOGOUT, payload: {} }
    default:
      return { type: contentConstant.REQUEST_CONTENT_ERROR, payload: error }
  }
}
