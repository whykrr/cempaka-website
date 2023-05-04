import React from 'react'
import { CCard, CCardBody, CCardHeader, CCol, CRow } from '@coreui/react'

const GeneralSetting = (props) => {
  // create state
  // const dispatch = useDispatch()

  // React.useEffect(() => {
  //   dispatch(contentAction.getList())
  // }, [])

  return (
    <>
      <CRow>
        <CCol xs="12">
          <CCard>
            <CCardHeader>
              <strong>General Setting</strong>
            </CCardHeader>
            <CCardBody>Uhuy</CCardBody>
          </CCard>
        </CCol>
      </CRow>
    </>
  )
}

export default GeneralSetting
