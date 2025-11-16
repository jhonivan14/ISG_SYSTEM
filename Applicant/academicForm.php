<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ISG Application Form • Step 1</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Roboto Slab', serif;
    }
  </style>
</head>

<body class="min-h-screen bg-gradient-to-b from-[#e0f2ff] via-white to-[#e0f2ff]">
  <!-- TOP BAR / BRAND -->
  <header class="bg-gradient-to-r from-[#052c6a] via-[#0d8ddb] to-[#1d4ed8] shadow-md">
    <div class="max-w-5xl mx-auto flex items-center gap-3 px-4 sm:px-6 py-3">
      <!-- LOGO -->
      <div class="flex items-center justify-center">
        <img
          src="../img/SMCCNEWLOGO.png"
          alt="SMCC Logo"
          class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover bg-white shadow-md border border-white"
        />
      </div>

      <!-- TEXT -->
      <div class="flex-1">
        <p class="text-[10px] sm:text-xs text-blue-100 uppercase tracking-[0.18em]">
          SMCC Admission and Scholarship Office
        </p>
        <h1 class="text-white text-sm sm:text-base font-semibold leading-tight">
          Institutional Scholarship Grants • Step 1
        </h1>
        <p class="text-[10px] sm:text-xs text-blue-100">
          Application Form for Institutional Scholars/Grantees
        </p>
      </div>
    </div>
  </header>

  <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8" tabindex="-1">
    <!-- PAGE TITLE + STEP -->
    <section class="text-center mb-6 sm:mb-8 space-y-2">
      <h2 class="text-2xl sm:text-3xl font-extrabold text-[#052c6a] leading-tight">
        APPLICATION FORM
      </h2>
      <p class="text-xs sm:text-sm text-[#052c6a]/80">
        For Institutional Scholars / Grantees of Saint Michael College of Caraga
      </p>
      <div class="inline-flex items-center gap-2 bg-[#e0ecff] text-[#052c6a] px-3 py-1 rounded-full text-[11px] sm:text-xs mt-1">
        <span class="w-2 h-2 rounded-full bg-[#0d8ddb]"></span>
        <span class="font-semibold tracking-wide uppercase">Step 1: Application Details</span>
      </div>
    </section>

    <!-- FORM CARD -->
    <section class="bg-white/95 backdrop-blur rounded-2xl sm:rounded-3xl shadow-lg border border-[#cddfff] p-4 sm:p-6 lg:p-8">
      <form
        action="#"
        method="POST"
        novalidate
        class="space-y-8 sm:space-y-10"
      >
        <!-- Type of Scholarship/Grant -->
        <fieldset class="border border-[#0d8ddb]/40 rounded-2xl p-4 sm:p-6 bg-[#f9fbff]">
          <legend class="px-2 text-base sm:text-lg font-semibold text-[#052c6a]">
            Type of Scholarship/Grant
          </legend>

          <p class="mt-2 text-[11px] sm:text-xs text-[#052c6a]/70">
            Please select the type of scholarship or grant you are applying for and specify if needed.
          </p>

          <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
            <div class="space-y-2">
              <div class="flex items-center gap-2">
                <input
                  class="h-4 w-4 text-[#0d8ddb] focus:ring-[#fcdc2f] border-gray-300"
                  id="academic"
                  name="scholarshipType"
                  type="radio"
                  value="Academic"
                  required
                />
                <label class="text-sm sm:text-base text-[#052c6a] font-medium" for="academic">
                  Academic
                </label>
              </div>

              <div class="flex items-center gap-2">
                <input
                  class="h-4 w-4 text-[#0d8ddb] focus:ring-[#fcdc2f] border-gray-300"
                  id="kabayani"
                  name="scholarshipType"
                  type="radio"
                  value="Kabayani"
                />
                <label class="text-sm sm:text-base text-[#052c6a] font-medium" for="kabayani">
                  Kabayani
                </label>
              </div>

              <div>
                <label
                  class="block text-[12px] sm:text-sm text-[#052c6a] font-medium mb-1"
                  for="kabayaniSpecify"
                >
                  Please specify (if Kabayani):
                </label>
                <input
                  class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-xs sm:text-sm
                         focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                  id="kabayaniSpecify"
                  name="kabayaniSpecify"
                  placeholder="e.g. Diocesan Scholar, School President’s Scholar, etc."
                  type="text"
                />
              </div>
            </div>

            <div class="space-y-2">
              <div class="flex items-center gap-2">
                <input
                  class="h-4 w-4 text-[#0d8ddb] focus:ring-[#fcdc2f] border-gray-300"
                  id="studentAssistance"
                  name="scholarshipType"
                  type="radio"
                  value="Student Assistance"
                />
                <label class="text-sm sm:text-base text-[#052c6a] font-medium" for="studentAssistance">
                  Student Assistant
                </label>
              </div>

              <div class="flex items-center gap-2">
                <input
                  class="h-4 w-4 text-[#0d8ddb] focus:ring-[#fcdc2f] border-gray-300"
                  id="others"
                  name="scholarshipType"
                  type="radio"
                  value="Others"
                />
                <label class="text-sm sm:text-base text-[#052c6a] font-medium" for="others">
                  Others
                </label>
              </div>

              <div>
                <label
                  class="block text-[12px] sm:text-sm text-[#052c6a] font-medium mb-1"
                  for="othersSpecify"
                >
                  Please specify (if Others):
                </label>
                <input
                  class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-xs sm:text-sm
                         focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                  id="othersSpecify"
                  name="othersSpecify"
                  placeholder="Specify other type of scholarship or grant"
                  type="text"
                />
              </div>
            </div>
          </div>
        </fieldset>

        <!-- Scholar/Grantee's Profile -->
        <fieldset class="border border-[#0d8ddb]/40 rounded-2xl p-4 sm:p-6 bg-white">
          <legend class="px-2 text-base sm:text-lg font-semibold text-[#052c6a]">
            Scholar/Grantee's Profile
          </legend>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mt-4">
            <div class="md:col-span-2">
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="applicantName">
                Name of Applicant <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="applicantName"
                name="applicantName"
                placeholder="Full name (Last Name, First Name, Middle Name)"
                required
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="programCourse">
                Program/Course Enrolled <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="programCourse"
                name="programCourse"
                placeholder="e.g. BS in Computer Science"
                required
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="yearLevel">
                Year Level <span class="text-red-600">*</span>
              </label>
              <select
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="yearLevel"
                name="yearLevel"
                required
              >
                <option disabled selected value="">Select year level</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
              </select>
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="schoolYear">
                School Year <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="schoolYear"
                name="schoolYear"
                placeholder="e.g. 2025–2026"
                required
                type="text"
              />
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="permanentAddress">
                Permanent Address <span class="text-red-600">*</span>
              </label>
              <textarea
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb] resize-y"
                id="permanentAddress"
                name="permanentAddress"
                placeholder="Complete home address"
                required
                rows="3"
              ></textarea>
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="gender">
                Gender <span class="text-red-600">*</span>
              </label>
              <select
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="gender"
                name="gender"
                required
              >
                <option disabled selected value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Prefer not to say">Prefer not to say</option>
              </select>
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="age">
                Age <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="age"
                min="0"
                name="age"
                placeholder="e.g. 20"
                required
                type="number"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="dateOfBirth">
                Date of Birth <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="dateOfBirth"
                name="dateOfBirth"
                required
                type="date"
              />
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="contactNumber">
                Contact Number <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="contactNumber"
                name="contactNumber"
                placeholder="+63 9XX XXX XXXX"
                required
                type="tel"
              />
            </div>

            <div class="md:col-span-2">
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="estimatedIncome">
                Estimated Gross Income of the Family per Month <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="estimatedIncome"
                min="0"
                name="estimatedIncome"
                placeholder="e.g. 25000"
                required
                type="number"
              />
            </div>
          </div>
        </fieldset>

        <!-- Mother's Information -->
        <fieldset class="border border-[#0d8ddb]/40 rounded-2xl p-4 sm:p-6 bg-[#f9fbff]">
          <legend class="px-2 text-base sm:text-lg font-semibold text-[#052c6a]">
            Mother's Information
          </legend>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mt-4">
            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherName">
                Mother's Name <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="motherName"
                name="motherName"
                placeholder="Full name"
                required
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherContact">
                Contact Number
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="motherContact"
                name="motherContact"
                placeholder="+63 9XX XXX XXXX"
                type="tel"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherCompanyName">
                Company's Name
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="motherCompanyName"
                name="motherCompanyName"
                placeholder="Company name"
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherCompanyAddress">
                Company's Address
              </label>
              <textarea
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb] resize-y"
                id="motherCompanyAddress"
                name="motherCompanyAddress"
                placeholder="Company address"
                rows="2"
              ></textarea>
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherAge">
                Age
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="motherAge"
                min="0"
                name="motherAge"
                placeholder="e.g. 45"
                type="number"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="motherOccupation">
                Occupation
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="motherOccupation"
                name="motherOccupation"
                placeholder="Occupation"
                type="text"
              />
            </div>
          </div>
        </fieldset>

        <!-- Father's Information -->
        <fieldset class="border border-[#0d8ddb]/40 rounded-2xl p-4 sm:p-6 bg-white">
          <legend class="px-2 text-base sm:text-lg font-semibold text-[#052c6a]">
            Father's Information
          </legend>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 mt-4">
            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherName">
                Father's Name <span class="text-red-600">*</span>
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="fatherName"
                name="fatherName"
                placeholder="Full name"
                required
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherContact">
                Contact Number
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="fatherContact"
                name="fatherContact"
                placeholder="+63 9XX XXX XXXX"
                type="tel"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherCompanyName">
                Company's Name
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="fatherCompanyName"
                name="fatherCompanyName"
                placeholder="Company name"
                type="text"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherCompanyAddress">
                Company's Address
              </label>
              <textarea
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb] resize-y"
                id="fatherCompanyAddress"
                name="fatherCompanyAddress"
                placeholder="Company address"
                rows="2"
              ></textarea>
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherAge">
                Age
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="fatherAge"
                min="0"
                name="fatherAge"
                placeholder="e.g. 48"
                type="number"
              />
            </div>

            <div>
              <label class="block text-sm text-[#052c6a] font-semibold mb-1.5" for="fatherOccupation">
                Occupation
              </label>
              <input
                class="w-full border border-[#0d8ddb]/60 rounded-xl px-3 py-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-[#fcdc2f] focus:border-[#0d8ddb]"
                id="fatherOccupation"
                name="fatherOccupation"
                placeholder="Occupation"
                type="text"
              />
            </div>
          </div>
        </fieldset>

        <!-- BUTTONS -->
        <div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-3">
          <p class="text-[11px] sm:text-xs text-[#052c6a]/70 text-center sm:text-left">
            After submitting this form, you will proceed to <span class="font-semibold">Step 2</span>
            to upload your documentary requirements.
          </p>

          <button
            class="w-full sm:w-auto inline-flex items-center justify-center gap-2
                   bg-[#0d8ddb] text-white font-semibold px-8 py-2.5 rounded-full
                   shadow-md hover:bg-[#0b63d1] active:scale-[0.99] transition"
            type="submit"
          >
            <span>Submit Application</span>
            <i class="fas fa-arrow-right text-xs"></i>
          </button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
