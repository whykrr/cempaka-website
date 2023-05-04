import React, { useEffect } from 'react'
import { CCol, CFormInput, CFormSelect, CRow, CButton, CPagination, CPaginationItem } from '@coreui/react'
// import SmartPagination from './SmartPagination'
import { faPen, faTrash, faAngleLeft, faAngleRight, faAnglesLeft, faAnglesRight } from '@fortawesome/free-solid-svg-icons'
import { useDispatch, useSelector } from 'react-redux'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import loadash from 'lodash.get'

const SmartTable = (props) => {
  const { setting, resource } = props
  const dispatch = useDispatch()
  const [displayPerPage, setDisplayPerPage] = React.useState(10)
  const data = useSelector((state) => state.table.data)
  const meta = useSelector((state) => state.table.meta)
  const mainPagination = []

  var number = 1

  useEffect(() => {
    dispatch({ type: resource, payload: {} })
  }, [])

  if (meta.last_page > 0) {
    if (meta.last_page <= 3) {
      for (let i = 1; i <= meta.last_page; i++) {
        mainPagination.push(i)
      }
    } else {
      if (meta.current_page <= 2) {
        mainPagination.push(1, 2, 3)
      } else if (meta.current_page >= meta.last_page - 1) {
        mainPagination.push(meta.last_page - 2, meta.last_page - 1, meta.last_page)
      } else if (meta.current_page > 2 && meta.current_page < meta.last_page - 1) {
        mainPagination.push(meta.current_page - 2, meta.current_page - 1, meta.current_page, meta.current_page + 1, meta.current_page + 2)
      } else {
        mainPagination.push(meta.current_page - 1, meta.current_page, meta.current_page + 1)
      }
    }
  }

  const changePage = (page) => {
    dispatch({ type: resource, payload: { perpage: displayPerPage, page: page } })
  }

  return (
    <CRow>
      <CCol xs="12" md="12">
        <CRow className="mb-2 justify-content-between">
          <CCol xs="4" md="1">
            <CFormSelect
              // value={meta.per_page ? meta.per_page : 10}
              onChange={(e) => {
                {
                  setDisplayPerPage(e.target.value)
                  dispatch({ type: resource, payload: { perpage: e.target.value } })
                }
              }}
              aria-label="Per Page"
              options={[
                {
                  value: 10,
                  label: 10,
                },
                {
                  value: 25,
                  label: 25,
                },
                {
                  value: 50,
                  label: 50,
                },
              ]}
            />
          </CCol>
          {/* <CCol xs="8" md="3" className="float-end">
            <CFormInput name="search" placeholder="Search" />
          </CCol> */}
        </CRow>
        <div className="table-responsive">
          <table className="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                {setting.map((item) => (
                  <th key={item.item}>{item.label}</th>
                ))}
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {data.map((item) => (
                <tr key={item.id}>
                  <td>{number++}</td>
                  {setting.map((setting_item) => (
                    // check setting
                    <td key={setting_item.item}>{loadash(item, setting_item.item)}</td>
                  ))}
                  <td>
                    <CButton color="primary" className="me-1 btn-sm">
                      <FontAwesomeIcon icon={faPen} className="icon" />
                    </CButton>
                    <CButton color="danger" className="btn-sm">
                      <FontAwesomeIcon icon={faTrash} className="icon" />
                    </CButton>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        <CPagination size="sm" aria-label="Pagination" align="end">
          {meta.current_page > 3 && (
            <CPaginationItem aria-label="First" onClick={() => changePage(1)}>
              <FontAwesomeIcon icon={faAnglesLeft} />
            </CPaginationItem>
          )}
          <CPaginationItem aria-label="Previous" onClick={() => changePage(meta.current_page - 1)} disabled={meta.current_page == 1}>
            <FontAwesomeIcon icon={faAngleLeft} />
          </CPaginationItem>
          {meta.current_page > 3 && (
            <>
              <CPaginationItem>1</CPaginationItem>
              <CPaginationItem disabled>...</CPaginationItem>
            </>
          )}
          {mainPagination.map((item) => (
            <CPaginationItem key={item} onClick={() => changePage(item)} active={item == meta.current_page}>
              {item}
            </CPaginationItem>
          ))}
          {meta.current_page < meta.last_page - 2 && (
            <>
              <CPaginationItem disabled>...</CPaginationItem>
              <CPaginationItem>{meta.last_page}</CPaginationItem>
            </>
          )}
          <CPaginationItem aria-label="Next" onClick={() => changePage(meta.current_page + 1)} disabled={meta.current_page == meta.last_page}>
            <FontAwesomeIcon icon={faAngleRight} />
          </CPaginationItem>
          {meta.current_page < meta.last_page - 2 && (
            <CPaginationItem onClick={() => changePage(meta.last_page)} aria-label="Last">
              <FontAwesomeIcon icon={faAnglesRight} />
            </CPaginationItem>
          )}
        </CPagination>
      </CCol>
    </CRow>
  )
}

export default SmartTable
